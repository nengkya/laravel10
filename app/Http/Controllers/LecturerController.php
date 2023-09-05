<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index(){
	$name = "HaGa IT Solution";
	$languages = ["Python", "PHP", "C"];
	return view('lecturer', ['name' => $name, 'languages' => $languages]);
    }
}
