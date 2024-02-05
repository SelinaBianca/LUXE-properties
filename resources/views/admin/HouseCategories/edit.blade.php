

@extends('admin.HouseCategories.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Property</div>
  <div class="card-body">
       
    <form action="{{ route('housecategories.update' ,$houseCategory->id) }}" method="POST">
      {!! csrf_field() !!}
      @method('PUT')

      @if (session('success'))
          <div class ="alert alert-success">
          {{session('success')}}
          </div> 
      @endif

      @if (session('errors'))
          <div class ="alert alert-danger">
          {{session('errors')}}
          </div> 
      @endif
      <input type="hidden" name="id" value="{{ $houseCategory->id }}" />

      <label>Type</label><br>
      <input type="text" name="type" value="{{ $houseCategory->Type }}" class="form-control" required><br>

      <label>Address</label><br>
      <input type="text" name="address" value="{{ $houseCategory->Address }}" class="form-control" required><br>

      <label>Number of Bedrooms</label><br>
      <input type="text" name="bedrooms" value="{{ $houseCategory->Number_of_bedrooms }}" class="form-control" required><br>

      <label>Number of Bathrooms</label><br>
      <input type="text" name="bathrooms" value="{{ $houseCategory->Number_of_bathrooms }}" class="form-control" required><br>

      <input type="submit" value="Update O" class="btn btn-success">
  </form>
  
    
  </div>
</div>
  
@endsection