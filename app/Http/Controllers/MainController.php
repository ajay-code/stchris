<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /** 
     * Landing page
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('index');
    }
}
