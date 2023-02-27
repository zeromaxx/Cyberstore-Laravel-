<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'shipping',
        'firstname',
        'lastname',
        'telephone',
        'address',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function item()
    {
        return $this->hasMany('App\Models\OrderItem', 'order_id');
    }
}
