<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

// use App\Http\Requets\Register;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    // index
    public function index()
    {
        return view('page.account.login');
    }

    // Login
    public function authenticate(Request $request)
    {
        $user = $this->userRepository->authenticate($request->all());
        return $user;
    }
}
