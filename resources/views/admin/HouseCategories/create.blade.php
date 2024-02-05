@extends('admin.HouseCategories.layout')
@section('content')

           
            <div class="card" style="margin:20px; margin-top:50px !important;">
                <div class="card-header">Create New Property</div>

                <div class="card-body">

                <form action="{{ route('housecategories.store') }}" method="POST">
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
                    
                    @csrf

                    <input type="hidden" name="token" value="{{csrf_token()}}">
                    <label>Type</label>
                    <input type="text" name="type" id="type" class="form-control" required><br>
            
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address"  class="form-control" required><br>
            
                    <label for="bedrooms">Number of Bedrooms</label>
                    <input type="text" name="bedrooms" id="bedrooms"  class="form-control" required><br>
            
                    <label for="bathrooms">Number of Bathrooms</label>
                    <input type="text" name="bathrooms" id="bathrooms" class="form-control" required><br><br>
            
                    <input type="submit" value="save" class="btn btn-success">

                </form>
            </div> 
            </div>

@stop