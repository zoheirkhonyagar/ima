<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pcat extends Model
{
    protected $guarded = [];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
