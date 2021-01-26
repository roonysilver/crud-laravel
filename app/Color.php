<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Color extends Model
{

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['name'];

    public function cars() {
        return $this->hasMany('App\Car');
    }
}
