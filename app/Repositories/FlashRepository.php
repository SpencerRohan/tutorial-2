<?php 

namespace App\Repositories;

use App\Contracts\FlashContract;

class FlashRepository implements FlashContract
{	
	public function __construct()
	{
		
	}
	
	public function flash($message = "")
	{
		return session()->flash('flash_message', $message);
	}
}

?>