<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Color;

class Car extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['make', 'model', 'produced_on'];

    public function colors() {
        return $this->belongsTo('App\Color');
    }
}
