<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
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
