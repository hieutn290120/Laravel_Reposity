<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    //index
    public function index()
    {
        return view('page.cv.home');
    }

}
