<?php 

namespace App\Repositories;

use App\Contracts\ProductContract;

class ProductRepository implements ProductContract
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