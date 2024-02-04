@extends('admin.HouseCategories.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
    <form action="{{ url('housecategories/' . $houseCategory->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      
      <input type="hidden" name="id" value="{{ $houseCategory->id }}" />
      <label>Name</label><br>
      <input type="text" name="name" value="{{ $houseCategory->name }}" class="form-control"><br>

      <label>Type</label><br>
      <input type="text" name="type" value="{{ $houseCategory->type }}" class="form-control" required><br>

      <label>Address</label><br>
      <input type="text" name="address" value="{{ $houseCategory->address }}" class="form-control" required><br>

      <label>Number of Bedrooms</label><br>
      <input type="text" name="bedrooms" value="{{ $houseCategory->bedrooms }}" class="form-control" required><br>

      <label>Number of Bathrooms</label><br>
      <input type="text" name="bathrooms" value="{{ $houseCategory->bathrooms }}" class="form-control" required><br>

      <input type="submit" value="Update" class="btn btn-success">
  </form>
  
    
  </div>
</div>
  
@stop