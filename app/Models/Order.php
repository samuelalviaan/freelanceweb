<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public $table = 'order';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'buyer_id',
        'freelance_id',
        'service_id',
        'file',
        'note',
        'expired',
        'order_status_id',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // One to Many Relationship
    public function user_buyer()
    {
        return $this->belongsTo('App\Models\User', 'buyer_id', 'id');
    }

    public function user_freelancer()
    {
        return $this->belongsTo('App\Models\User', 'freelance_id', 'id');
    }

    // One to Many Relationship
    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id', 'id');
    }

    // One to Many Relationship
    public function order_status()
    {
        return $this->belongsTo('App\Models\OrderStatus', 'order_status_id', 'id');
    }
}
