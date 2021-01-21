<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Visitor extends Model
{

    use Sluggable;
    protected $fillable=[
        'name','email','phone_number','message','slug'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
                'unique'=>true,
            ]
        ];
    }
}
