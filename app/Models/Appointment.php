<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{

    protected $fillable = [
        'name',
        'email',
        'phone',
        'doctor',
        'date',
        'mesage',
        'status',
    ];

    use Notifiable;
}
