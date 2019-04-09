@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')


@section('content')
@include('partials.message')
<style type="text/css">

    .label-color{
        color: black;
    }

</style>

    <div class="panel panel-default">
        <div class="panel-heading">

        </div>

        <div class="panel-body table-responsive">
            <table id="table" class="table table-bordered table-striped  dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"></th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Comentario</th>
                        <th>Registrado</th>
                    </tr>
                </thead>

                <tbody>

                </tbody>
            </table>
        </div>
    </div>

@endsection
@section('javascript')
     {{ Html::style('adminlte/css/jquery.dataTables.min.css') }}
     {{ Html::script('adminlte/js/jquery.dataTables.min.js') }}
     {{ Html::script('bolas/js/jquery.validate.min.js')}}

      <!-- Include Required Prerequisites -->
     {!! Html::script('adminlte/js/moment.min.js') !!}

       <!-- Include Date Range Picker -->

     {!! Html::style('adminlte/css/daterangepicker.css') !!}
     {!! Html::script('adminlte/js/daterangepicker.js') !!}


  <script type="text/javascript">
          $(function($) {

                    /*Validate*/
                $("#form").validate({
                  submitHandler: function(form) {
                    form.submit();
                  }
                 });

                $('input[name="daterange"]').daterangepicker({
                        locale: {
                          format: 'YYYY/MM/DD'
                     }
                });
                 $('div.alert').not('.alert-important').delay(3000).fadeOut(350);

                vurl='{{ url("admin/contact/ajaxDataTableContact")}}';

                $('#table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax:{
                            url:vurl ,
                            type:'get',
                        } ,
                         language: {
                            url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json'
                         },
                        columns: [
                            {data: 'id', name:'id','orderable': false},
                            {data: 'name', name:'name'},
                            {data: 'email', name:'email'},
                            {data: 'text', name:'text'},
                            {data: 'created', name:'created'},
                        ],
                        bAutoWidth: false,
                        order: [[0, 'asc']],
                        'aaSorting': [],

                    });


                });



  </script>
@endsection