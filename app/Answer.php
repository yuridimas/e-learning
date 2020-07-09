<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'assignment_id', 'status', 'description'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function assigment()
    {
        return $this->belongsTo('App\Assignment');
    }

    public function assessments()
    {
        return $this->hasMany('App\Assessment');
    }
}
