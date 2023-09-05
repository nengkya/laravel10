<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function index($name) {
	return view('employee', ['name' => $name]);
    }
}
