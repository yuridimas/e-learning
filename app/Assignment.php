<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Assignment extends Model
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id', 'grade_id', 'type', 'title', 'slug', 'link', 'file', 'schedule_start', 'schedule_end', 'description'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['schedule_start', 'schedule_end'];

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function grade()
    {
        return $this->belongsTo('App\Grade', 'grade_id');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
