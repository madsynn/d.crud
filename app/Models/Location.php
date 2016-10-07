<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    public $table = 'locations';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'location_type',
        'nickname',
        'address',
        'street',
        'street_additional',
        'city',
        'state',
        'country',
        'zipcode',
        'latitude',
        'longitude',
        'filter_class'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'location_type' => 'string',
        'nickname' => 'string',
        'address' => 'string',
        'street' => 'string',
        'street_additional' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country' => 'string',
        'zipcode' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'filter_class' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

}
