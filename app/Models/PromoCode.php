<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PromoCode
 *
 * @property $id
 * @property $code
 * @property $enabled
 * @property $start_date
 * @property $end_date
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PromoCode extends Model
{
    
    static $rules = [
		'code' => 'required',
		'enabled' => 'required',
		'start_date' => 'required',
		'end_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code','enabled','start_date','end_date'];



}
