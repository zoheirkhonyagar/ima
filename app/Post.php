<?php

namespace App;

use App\Pcat;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function pcat()
    {
        return $this->belongsTo(Pcat::class);
    }
}
