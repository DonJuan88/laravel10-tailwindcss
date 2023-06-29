<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipping extends Model
{
    use HasFactory;
    protected $fillable = [
        'shipcode',
        'email',
        'shipname',
        'notes',
        'village',
        'subdisc',
        'disctric',
        'province',
        'postalcode',
        'phone'
    ];

    protected $hidden =[
        'created_at',
        'updated_at'
    ];
    
    protected $guard =[
        'created_at',
        'updated_at'
    ];
}
