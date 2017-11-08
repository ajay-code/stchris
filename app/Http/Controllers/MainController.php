<?php

namespace App\Http\Controllers;

use App\Gsuite;
use App\Sidebar;
use App\SchoolInformation;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /** 
     * Landing page
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $gsuites = Gsuite::all();
        $schoolInformations = SchoolInformation::all();
        $sidebars = Sidebar::all();
        return view('index', compact('gsuites', 'schoolInformations', 'sidebars'));
    }
}
