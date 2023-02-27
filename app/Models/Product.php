<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
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

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function favouritedBy()
    {
        return $this->belongsToMany(User::class, 'favourites');
    }

}
