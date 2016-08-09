<!-- Trigger the modal with a button -->
@extends('layouts.master')
<!-- Modal -->
<div id="myModal"  class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add new Product</h4>
      </div>
      <div class="modal-body">
      
@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger form-feedback" >
        <strong>Whoops! Something went wrong!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>

            @endforeach
        </ul>
    </div>
@endif
<form action="store" method="POST" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()" > 
		 <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
		 <br/>
		Product Name
		<input type="text" name="title"  class="form-control" required ><br/>
		Price
		<input type="text" name="price" class="form-control" required><br/>
		Description
		<input type="text" name="description" class="form-control" required><br/>
		Image
		<input type="file" name="image" class="form-control"><br/>	
		<br/>
		<input type="submit" value="Save Record" class="btn btn-primary">
	</form>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 

<!--Login Modal-->
<div class="light-skin modal fade" id="loginModal" tabindex="-1" role="form" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Login here</h4>

      </div>
      <div class="modal-body">
        <form class="login-form" role="form" method="post" action="/">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control"  id="username" name="username" placeholder="Enter Username" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          </form>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
