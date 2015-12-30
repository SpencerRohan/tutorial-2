
	@if (Session::has('flash_message'))
	  <div class="flash alert alert-success">
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	    {{ session('flash_message') }}
	  </div>
	@endif 
