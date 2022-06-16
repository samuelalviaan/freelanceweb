<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvantageUser extends Model
{

    use SoftDeletes;

    public $table = 'advantage_user';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'service_id',
        'advantage',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // One to Many Relationship
    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id', 'id');
    }

}
