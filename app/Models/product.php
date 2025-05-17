<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'productName',
        'productPrice',
        'productDescription',
        'productImage',
        'productCategory',
        'productBrand',
    ];
}
