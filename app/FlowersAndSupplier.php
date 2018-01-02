<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlowersAndSupplier extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'flowers_and_suppliers';

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
    protected $fillable = ['flower_id', 'supplier_id'];

    
}
