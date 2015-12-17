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
      $product = $this->whereCode($code)->first();
      return ($product) ? $product : $this->find(1);
    }

    public function scopeCode($query, $code='anvil') {
      $query->whereCode($type)->first();
    }

// Product::where('name', 'Charline')->byCode('anvil')->first();

// Product::lastMonth()

//     public function scopeByCode($query, $type='anvil')
//     {
//       $query->whereCode($type);
//     }

//     public function scopeLastMonth($query)
//     {
//       $query->where('created_at', 'start of last month')->whereCreatedAt('<', 'end of last month')
//     }

}
