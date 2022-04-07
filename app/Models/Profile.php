<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';
    protected $fillable = [
        'user_id', 'displayName', 'phoneNumber','country','address','avatar','shortDescription','create_at','updated_at'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
