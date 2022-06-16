<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderStatus extends Model
{
    use SoftDeletes;

    public $table = 'order_status';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // One to Many
    public function order()
    {
        return $this->hasMany('App\Models\Order', 'order_status_id');
    }
}
