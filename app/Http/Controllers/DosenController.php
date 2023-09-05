<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
	$name = "HaGa IT Solution";
	$languages = ["Python", "PHP", "C"];
	return view('dosen', ['name' => $name, 'languages' => $languages]);
    }
}
