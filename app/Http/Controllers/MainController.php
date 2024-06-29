<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }

    public function mma()
    {
        return view ('discipline.mixed-martial-arts');
    }

    public function bjj()
    {
        return view ('discipline.brazilian-jiu-jitsu');
    }

    public function sg()
    {
        return view ('discipline.submission-grappling');
    }

    public function cjj()
    {
        return view ('discipline.combat-jiu-jitsu');
    }

    public function mmaForKids()
    {
        return view ('mma-programs.mma-programs-for-kids');
    }

    public function mmaForAdults()
    {
        return view ('mma-programs.mma-programs-for-adults');
    }
    
    public function bjjForKids()
    {
        return view ('bjj-programs.bjj-programs-for-kids');
    }

    public function bjjForAdults()
    {
        return view ('bjj-programs.bjj-programs-for-adults');
    }

    public function subGrapplingForKids()
    {
        return view ('sub-grappling-programs.sub-grappling-programs-for-kids');
    }

    public function subGrapplingForAdults()
    {
        return view ('sub-grappling-programs.sub-grappling-programs-for-adults');
    }

    public function selfDefenseForKids()
    {
        return view ('self-defense.self-defense-programs-for-kids');
    }
}
