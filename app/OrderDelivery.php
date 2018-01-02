<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDelivery extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'order_deliveries';

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
    protected $fillable = ['buyer', 'address', 'order_id'];

    
}
