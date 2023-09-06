<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function index($name) {
	return view('employee', ['name' => $name]);
    }

    public function form() {
	return view('form');
    }

    function form_process(Request $request) {
	$name 	 = $request->input('name');
	$address = $request->input('address');
	return view('form_process', ['name' => $name, 'address' => $address]);
    }
}
