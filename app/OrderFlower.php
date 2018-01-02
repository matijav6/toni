<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderFlower extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'order_flowers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['flower_id', 'color_id', 'quantity', 'order_id'];

    
}
