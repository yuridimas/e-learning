<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'grade_id', 'file'
    ];

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function grade()
    {
        return $this->belongsTo('App\Grade', 'grade_id');
    }
}
