<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'school_fee_id', 'status', 'description'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function school_fee()
    {
        return $this->belongsTo('App\SchoolFee', 'school_fee_id');
    }
}
