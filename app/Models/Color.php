<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Color
 *
 * @property $id
 * @property $name
 *
 * @property Product[] $products
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Color extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'color_id', 'id');
    }
    

}
