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
 * @property $updated_at
 * @property $created_at
 * @property $discount
 * @property $max_discount
 * @property $is_percentage
 * @property $minmum_amount_required
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
		'discount' => 'required',
		'max_discount' => 'required',
		'is_percentage' => 'required',
		'minmum_amount_required' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code','enabled','start_date','end_date','discount','max_discount','is_percentage','minmum_amount_required'];



}
