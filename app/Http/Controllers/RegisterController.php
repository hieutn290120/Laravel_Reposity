<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Register;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquents\UserRepository;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // index

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function index()
    {
        return view('page.account.register');
    }

    public function create(Request $request)
    {
         $user =  $this->userRepository->create($request->all());
         return response()->json($user);
    }

    public function update(Request $request){

    }
}
