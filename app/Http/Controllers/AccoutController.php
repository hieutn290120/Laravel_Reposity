<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use App\Http\Requets\Register;

class AccoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // index
    public function index()
    {
        return view('page.account.login');
    }

    // Login
    public function store(Login $request)
    {
        # code...
    }
}
