<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'brandcode',
        'catcode',
        'baseprice',
        'saleprice',
        'unit',
        'stock',
        'image',
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
