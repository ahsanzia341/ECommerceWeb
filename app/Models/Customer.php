<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property $id
 * @property $email
 * @property $name
 * @property $is_verified
 * @property $password
 * @property $created_at
 * @property $updated_at
 * @property $remember_token
 * @property $email_verified_at
 *
 * @property CustomerAddress[] $customerAddresses
 * @property CustomerWishlist[] $customerWishlists
 * @property Invoice[] $invoices
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{
    
    static $rules = [
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['email','name','is_verified'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customerAddresses()
    {
        return $this->hasMany('App\Models\CustomerAddress', 'customer_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customerWishlists()
    {
        return $this->hasMany('App\Models\CustomerWishlist', 'customer_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice', 'customer_id', 'id');
    }
    

}
