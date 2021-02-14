<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';

    protected $fillable = ['title', 'user_id', 'category_id'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
