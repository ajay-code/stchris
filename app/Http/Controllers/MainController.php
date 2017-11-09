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
        $gsuites = Gsuite::orderBy('order', 'asc')->get();
        $schoolInformations = SchoolInformation::orderBy('order', 'asc')->get();
        $sidebars = Sidebar::orderBy('order', 'asc')->get();
        return view('index', compact('gsuites', 'schoolInformations', 'sidebars'));
    }
}
