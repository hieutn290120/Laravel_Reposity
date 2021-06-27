<?php

namespace App\Repositories\Eloquents;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function authenticate(array $attributes){
        

        if (Auth::attempt($attributes)) {
            // Authentication passed...
            return ['status'=>200, 'description'=>'Login thành công!'];
        }
        return ['status'=>500, 'description'=>'Login không thành công, kiểm tra tài khoản hoặc mật khẩu!'];
    }

    public function getAll()
    {
        return User::all();
    }

    public function find($id)
    {
        $result = User::find($id);
        
        return $result;
    }
    
    public function create(array $attributes)
    {
       

        $data =  $attributes;
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = 0;
        $user = User::all();

        if(!empty($user[0])){
            if($user[0]->email === $attributes['email']){
                return ['status'=>500, 'description'=>'Email đã tồn tại, vui lòng chọn email khác!']
              ;
           };
        }
     
        return ['status'=>200, 'description'=>User::create($data)];
       
    }

    public function update($id, array $attributes)
    {
        $result = User::find($id);

        if($result) 
        {
            $result->update($attributes);
            return $result;
        }
        
        return false;
    }

    public function delete($id)
    {
        $result = User::find($id);
        if($result) 
        {
            $result->delete();   
            return true;
        }

        return false;
    }
} 