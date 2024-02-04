@extends('admin.HouseCategories.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('housecategories/' .$HouseCategories"$->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
                   
        <input type="hidden" name="id" id="id" value="{{$HouseCategories}}" id="id" />
        <label>Name</label><br>

        <input type="text" name="name" id="name" value="{{$HouseCategories}}" class="form-control"><br>
        <label>Type</label><br>

        <input type="text" name="address" id="address" value="{{$HouseCategories}}" class="form-control" required><br>
        <label for="address">Address</label>
            
        <input type="text" name="bedrooms" id="bedrooms" value="{{$HouseCategories}}" class="form-control" required><br>
        <label>Number of Bedrooms</label><br>
   
        <input type="text" name="bathrooms" id="bathrooms" value="{{$HouseCategories}}" class="form-control" required><br>
        <label for="bathrooms">Number of Bathrooms</label> 
        
        <input type="submit" value="Update" class="btn btn-success">
    </form>
    
  </div>
</div>
  
@stop