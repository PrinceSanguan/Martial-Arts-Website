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
        return view ('mma-classes-in-swansea');
    }

    public function bjj()
    {
        return view ('bjj-classes-in-swansea');
    }

    public function blogs()
    {
        return view ('blogs');
    }
}
