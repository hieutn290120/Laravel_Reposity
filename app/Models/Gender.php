<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\User;


class Gender extends Model
{
    use HasFactory,Notifiable;
    
    public $table = 'gender';

    /**
     * Get the user that owns the Gender
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'gender_id', 'gender_id');
    }

}
