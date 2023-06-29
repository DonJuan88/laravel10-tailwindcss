<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderd extends Model
{
    use HasFactory;
    protected $fillable = [
        'transno',
        'itemcode',
        'itemname',
        'catcode',
        'qty',
        'baseprice',
        'saleprice',
        'discount'
        
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
