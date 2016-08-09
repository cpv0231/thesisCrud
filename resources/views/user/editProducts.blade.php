

@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
             
                <div class="panel-body">
         <?php 
          $imagepath= '';
          $imagepath=url('uploads/image/'.$row -> imagePath);

        ?>
        <form action="{{action('adminController@update')}}" name="myForm" method="POST" enctype="multipart/form-data">
             <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
             <input type="hidden" name="id" value="<?=  $row->id ?>">
             <br/>
            Product Name
            <input type="text" name="title" value="<?= $row->title  ?>" class="form-control"><br/>
            Price
            <input type="text" name="price" value="<?=   $row->price  ?>" class="form-control"><br/>
            Description
            <input type="text" name="description" value="<?=  $row->description ?> " class="form-control"><br/>
            Image
            <input type="file" name="imagePath" value="<?= $imagepath ?>" class="form-control"> <br/> 
            <br/>
            <input type="submit" value="Save Record" class="btn btn-primary">
        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
