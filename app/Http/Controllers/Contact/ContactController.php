<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact\Contact;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

class ContactController extends Controller {
	/* secciion - Vista para el contacto 	*/

	public function index_contact() {

		return view('admin.contact.index');
	}
	/*Ajax contact */
	public function ajaxContactForm(Request $request) {
		$true = Contact::create([
			'name' => $request->name,
			'email' => $request->email,
			'text' => $request->message,
			'created' => Date::now()->format('Y-m-d'),

		]);
		return response()->json($true);
	}

	public function ajaxDataTableContact() {
		$register = Contact::all();
		$con = 1;
		return datatables($register)
			->addColumn('id', function ($val) use (&$con) {

				return $con++;
			})
			->addColumn('name', function ($val) {
				return ucfirst(strtolower($val->name));
			})
			->addColumn('email', function ($val) {
				return $val->email;
			})
			->addColumn('text', function ($val) {
				return $val->text;
			})
			->make(true);
	}
}
