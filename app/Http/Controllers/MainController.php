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
        $gsuites = Gsuite::orderBy(\DB::raw('-`order`'), 'desc')->get();
        $schoolInformations = SchoolInformation::orderBy(\DB::raw('-`order`'), 'desc')->get();
        $sidebars = Sidebar::orderBy(\DB::raw('-`order`'), 'desc')->get();
        return view('index', compact('gsuites', 'schoolInformations', 'sidebars'));
    }
}
