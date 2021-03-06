<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }

}
