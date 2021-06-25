<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requets\Register;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // index
    public function index()
    {
        return view('page.account.register');
    }

    public function create(Register $request)
    {
        $user = User::all();
        $user->update([$request->all()]);
        return response()->json($user, 200);
    }
}
