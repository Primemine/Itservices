<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Servirce extends Model
{

    use Sluggable;

    protected $fillable=['service_name','image','description','view_point1','view_point2','view_point3','view_point4','view_point5','view_point6','slug'];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'service_name',
                'separator'=>'_',
                'unique'=>true,
            ]
        ];
    }
}
