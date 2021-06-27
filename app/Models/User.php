<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
use App\Models\Gender;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender_id',
        'address',
        'dob',
        'role_id'
    ];

    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'date: Y-m-d',
        'created_at' => 'date: Y-m-d',
        'dob' => 'date: Y-m-d',
    ];

    // protected $dateformat = "Y-m-d H:i:s.v";

    /**
     * Get the user associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role(): HasOne
    {
        return $this->hasOne(Role::class, 'role_id', 'role_id')->select(['role_id','role_name']);
    }

    public function gender(): HasOne
    {
        return $this->hasOne(Gender::class, 'gender_id', 'gender_id')->select(['gender_id','gender_name']);
    }

}
