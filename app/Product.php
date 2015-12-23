<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function theme()
    {
      return $this->belongsTo('App\Theme');
    }

    public static function setProductLine($code) {
      $product = static::whereCode($code)->first();
      return ($product) ? $product : static::find(1);
    }

    public function scopeCode($query, $code='anvil') {
      $query->whereCode($type)->first();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'code', 'layout', 'theme_id', "headline", 'content'];


}
