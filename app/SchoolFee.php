<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolFee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_year', 'mount', 'schedule_start', 'schedule_end',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['schedule_start', 'schedule_end'];

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}
