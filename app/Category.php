<?php

namespace App;

use App\Portfolio;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}
