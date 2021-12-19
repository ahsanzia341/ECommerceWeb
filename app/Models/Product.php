<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $quantity
 * @property $price
 * @property $image
 * @property $updated_at
 * @property $created_at
 * @property $category_id
 *
 * @property Category $category
 * @property InvoiceItem[] $invoiceItems
 * @property ProductReview[] $productReviews
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'name' => 'required',
		'quantity' => 'required',
		'price' => 'required',
		'category_id' => 'required',
        'image' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','quantity','price','image','category_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItems()
    {
        return $this->hasMany('App\Models\InvoiceItem', 'product_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productReviews()
    {
        return $this->hasMany('App\Models\ProductReview', 'product_id', 'id');
    }
    

}
