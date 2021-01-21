<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravelista\Comments\Commentable;

class Post extends Model
{

    use Sluggable;
    use Commentable;

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
                'source' => 'post_name',
                'separator'=>'_',
                'unique'=>true,
            ]
        ];
    }

    /*
     * for visitor counting
     */
    public function vzt()
    {
        return visits($this);
    }
}
