@extends('layouts.master')

@section('title')
		
@endsection
	
@section('content')


<div container>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">add prducts</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
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
       	
<form id="product-form" action="store" method="POST" enctype="multipart/form-data">
		 <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
		 <br/>
		Product Name
		<input type="text" name="title" class="form-control" ><br/>
		Price
		<input type="text" name="price" class="form-control" ><br/>
		Description
		<input type="text" name="description" class="form-control" ><br/>
		Image
		<input type="file" name="image" class="form-control" ><br/>	
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




	<table class="table table-responsive table-hover"  >
		<thead>	
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Product Description</th>
			<th>Product Price</th>
			<th>Product Image</th>
			<th>Action</th>
		</thead>	
			<tbody>	
			 @foreach($products as $data)
			  <tr>	
			  	 <?php 
        		$imagepath = '';
        		$imagepath=url('uploads/image/'.$data -> imagePath);

      			?>
			 	<td>{{$data -> id}}</td>
			 	<td>{{$data -> title}}</td>
			 	<td>{{$data -> description}}</td>
			 	<td>{{$data -> price}}</td>
			 	<td><img src="{{$imagepath}}" width="50px" height="50px"></td>
			 	<td> 	
  	<a href="{{ 'editProducts/'. $data->id}}">Edit  </a><a href="{{ 'deleteProducts/' . $data->id}}">delete</a></td>
			   </tr>	
			 @endforeach
			 <br/><br/>
			<?php echo $products->links(); ?>
			</tbody>
	</table>
</div>
@endsection