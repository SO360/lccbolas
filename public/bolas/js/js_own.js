
   var videoYoutube = function() {
          $(".js-video-button").modalVideo({
               youtube:{
                controls: 0,
                autoplay: 1,
                nocookie: true,
                playlist: null,
                playsinline: null,

                cc_load_policy: 1,
                color: null,
                disablekb: 0,
                enablejsapi: 0,
                end: null,
                fs: 1,
                h1: null,
                iv_load_policy: 1,
                list: null,
                listType: null,
                loop: 0,
                modestbranding: null,
                origin: null,
                rel: 0,
                showinfo: 1,
                start: 0,
                wmode: 'transparent',
                theme: 'dark'

            }
          });

      };


        function debounce(func, wait, immediate) {
          var timeout;
          return function() {
            var context = this, args = arguments;
            var later = function() {
              timeout = null;
              if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
          };
        };
        function recaptchaCallback() {
          var response = grecaptcha.getResponse(),
            $button = jQuery(".button-register");
          jQuery("#hidden-grecaptcha").val(response);
          console.log(jQuery("#registerForm").valid());
          if (jQuery("#registerForm").valid()) {
            $button.attr("disabled", false);
          }
          else {
            $button.attr("disabled", "disabled");
          }
        }
      function recaptchaExpired() {
        var $button = jQuery(".button-register");
        jQuery("#hidden-grecaptcha").val("");
        var $button = jQuery(".button-register");
        if (jQuery("#registerForm").valid()) {
          $button.attr("disabled", false);
        }
        else {
          $button.attr("disabled", "disabled");
        }
      }

      /*Lista*/

      
      function submitRegister() {
        //ajax stuff
           csrf =  $('meta[name="_token"]').attr('content')
           path =  $("input[name=path]").val();
           dataString = $('#registerForm').serialize();
  
            $.ajax({
              url:  path,
              type: 'POST',
              headers:{'X-CSRF-TOKEN': csrf },
              dataType: 'json',
              data:   dataString,
            })
            .done(function( data, textStatus, jqXHR) {
                 
               //  console.log(data);
                  alertify.alert('GRACIAS!!!',"Pronto nos comunicaremos contigo.", function(){
                 });

                   $('#registerForm')[0].reset();
                   grecaptcha.reset();
            
            })
            .fail(function(data, textStatus, jqXHR) {
               // console.log('error');

                   alertify.alert('TENEMOS UN PROBLEMA',"No se ha podido registrar correctamente sus datos. Por Favor intente con otro correo.", function(){
                 });
                      $('#registerForm')[0].reset();
                      grecaptcha.reset();
            
            })
            .always(function() {
               //  console.log("complete");
            });
          
      
      }

      function submitRegister2(){
        csrf =  $('meta[name="_token"]').attr('content')
           path =  $("input[name=path_contact]").val();
           dataString = $('#registerForm3').serialize();
    
            $.ajax({
              url:  path,
              type: 'POST',
              headers:{'X-CSRF-TOKEN': csrf },
              dataType: 'json',
              data:   dataString,
            })
            .done(function( data, textStatus, jqXHR) {
                 
               //  console.log(data);
                  alertify.alert('GRACIAS!!!',"Pronto nos comunicaremos contigo.", function(){
                 });

                   $('#registerForm3')[0].reset();
                   grecaptcha.reset();
            
            })
            .fail(function(data, textStatus, jqXHR) {
               // console.log('error');

                   alertify.alert('TENEMOS UN PROBLEMA',"No se ha podido registrar correctamente sus datos. Por Favor intente con otro correo.", function(){
                 });
                      $('#registerForm3')[0].reset();
                      grecaptcha.reset();
            
            })
            .always(function() {
               //  console.log("complete");
            });
      }
      (function ($, root, undefined) {
        $(function () {
            'use strict';
                jQuery("#registerForm").find("input").on("keyup", debounce(function() {
                  var $button = jQuery(".button-register");
                  console.log(jQuery("#registerForm").valid());
                  if (jQuery("#registerForm").valid()) {
                    $button.attr("disabled", false);
                  }
                  else {
                    $button.attr("disabled", "disabled");
                  }
                }, 1000));

                jQuery("#registerForm").validate({
                  rules: {
                    "name": {
                      required: true,                    
                    },
                    "last_name": "required",
                    "mother_last_name": "required",
                    
                    "email": { email: true,required:true},
                    "cellphone": "required",
                    "hidden-grecaptcha": {
                      required: true,
                      minlength: "255"
                    }
                  },
                  messages: {
                    "email": "Ingrese una dirección válida de correo",
                    "name":"Ingrese un Nombre",
                    "last_name": "Ingrese su Apellido Paterno",
                    "mother_last_name": "Ingrese su Apellido Materno",
                    "email": "Ingrese un Correo",
                    "cellphone": "Ingrese un Teléfono",
                    "hidden-grecaptcha":"Debe selecionar el captcha",
                  },
                  submitHandler: submitRegister
                });


                jQuery("#registerForm3").find("input").on("keyup", debounce(function() {
                  var $button = jQuery(".button-register3");
                  console.log(jQuery("#registerForm3").valid());
                  if (jQuery("#registerForm3").valid()) {
                    $button.attr("disabled", false);
                  }
                  else {
                    $button.attr("disabled", "disabled");
                  }
                }, 1000));


                jQuery("#registerForm3").validate({
                  rules: {
                    "name": {
                      required: true,                    
                    },
                    "message": "required",
                    "email": { email: true,required:true},
                  
                 
                  },
                  messages: {
                    "email": "Ingrese una dirección válida de correo",
                    "name":"Ingrese un Nombre",
                    "message": "Ingrese su mensaje",
                    "hidden-grecaptcha":"Debe selecionar el captcha",
                  },

                  submitHandler: submitRegister2
                  
                });
            }); 
        })(jQuery, this);

      $(function(){
          $.fn.snow();
          videoYoutube();
           $('#cellphone').mask('(51) 000-000-000');

      });