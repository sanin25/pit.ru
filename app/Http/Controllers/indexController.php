<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class indexController extends Controller
{
    function index(){
        return view('index');
    }
}
