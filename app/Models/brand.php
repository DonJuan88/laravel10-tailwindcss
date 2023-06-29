<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brandcode',
        'brandname'
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
