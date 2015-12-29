<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{


    public function products()
    {
      return $this->hasMany('App\Product');
    }

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['hex', 'color', 'headline', 'sm_headline', 'body', 'theme_id'];

}
