<?php 

namespace App\Repositories;

use App\Product;

class ProductRepository 
{
	protected $model;
	
	public function __construct($model)
	{
		$this->model = $model;
	}
	
	public function getByCode($code = 'anvil', $with = [])
	{
		return $this->model
			->with($with)
			->where('code', $code)
			->first();
	}
}

?>