<?php 

namespace App\Repositories;

class VendorRepository 
{
	protected $model;
	
	public function __construct($model)
	{
		$this->model = $model;
	}
	
	public function getVendors()
	{
		return $this->model->all();
	}
}

?>