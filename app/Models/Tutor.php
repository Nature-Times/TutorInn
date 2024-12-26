<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tutor extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'tutor'; 

    protected $fillable = ['name', 'email', 'subject', 'cv']; 

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'email', 'email'); 
    }
}