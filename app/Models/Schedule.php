<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Schedule extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'date_schedule'; 

    protected $fillable = ['name', 'email', 'subject', 'date', 'time']; 

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}