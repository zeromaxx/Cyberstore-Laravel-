<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'firstname',
        'email',
        'password',
        'lastname',
        'address',
        'telephone',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function addFavourite(Product $product, $user_id)
    {
        $this->favourites()->create([
            'product_id' => $product->id,
            'user_id' => $user_id,
        ]);
    }

    public function removeFavourite(Product $product)
    {
        $this->favourites()->where('product_id', $product->id)->delete();
    }

    public function hasFavourited(Product $product)
    {
        return $this->favourites()->where('product_id', $product->id)->exists();
    }

    public function hasAddedToCart(Product $product)
    {
        return $this->cart()->where('product_id', $product->id)->exists();
    }

    public function cartCount()
    {
        return count($this->cart()->get()->toArray());
    }



    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
