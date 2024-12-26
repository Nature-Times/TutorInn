<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'mahasiswas'; 

    protected $fillable = ['email', 'password', 'name', 'phone_number', 'age']; 

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function phones(){
        return $this->hasOne(Phone::class);
    }

    public function tutor()
    {
        return $this->hasOne(Tutor::class);
    }
}