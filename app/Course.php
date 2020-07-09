<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Course extends Model
{
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'code', 'slug', 'description'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function grades()
    {
        return $this->belongsToMany('App\Grade');
    }

    public function assigmnets()
    {
        return $this->hasMany('App\Assignment');
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
