<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'transno',
        'transdate',
        'email',
        'shippping',
        'shiptype',
        'payment',
        'status' 

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
