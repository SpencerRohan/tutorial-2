<?php 

namespace App\Contracts;

interface ProductContract
{
	public function getByCode($code, $relationships = []);
}

?>