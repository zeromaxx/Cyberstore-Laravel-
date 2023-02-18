<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $timestamps = true;

    protected $fillable = [
        'category_id',
        'description',
        'qty',
        'price',
        'sales',
        'image',
        'name',
    ];
}
