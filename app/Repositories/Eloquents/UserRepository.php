<?php

namespace App\Repositories\Eloquents;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Exception;
use InvalidArgumentException;

class UserRepository implements UserRepositoryInterface
{
    public function authenticate(array $attributes){
        
        DB::beginTransaction();
        

        if (Auth::attempt($attributes)) {
            // 
        }else{
            DB::rollBack();
            throw new  InvalidArgumentException('Login không thành công, kiểm tra tài khoản hoặc mật khẩu!') ;
        }
        DB::commit();

        return ['status'=>200, 'description'=>'Login thành công!'];
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
        DB::beginTransaction();
        
        $array =  $attributes;
        $array['password'] = Hash::make($array['password']);
        $array['role_id'] = 0;
        // $user = User::all();

        try{
           $account = User::create($array);
        }catch(Exception  $e){
            DB::rollBack();
            throw new  InvalidArgumentException('Email đã tồn tại, vui lòng chọn email khác!') ;
        }
        DB::commit();
     
        return ['status'=>200, 'description'=>'Chúc mừng, đăng kí tài khoản thành công!'];
       
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