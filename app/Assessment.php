<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'answer_id', 'score'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function answer()
    {
        return $this->belongsTo('App\Answer', 'answer_id');
    }
}
