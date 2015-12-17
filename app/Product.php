<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function theme()
    {
      return $this->belongsTo('App\Theme');
    }

    public function setProductLine($code) {
      $product = Product::where('code', $code)->first();
      return ($product) ? $product : Product::find(1);
    }

}
