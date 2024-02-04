
@extends('admin.HouseCategories.layout')
@section('content')

           <div class="container">
            <div class="row" style="margin:20px:">
                <div class="col-12">
                    <div class = "card">
                        <div class="card-header">
                            <h2>Properties</h2>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('/housecategories/create')}}" class="btn btn-success btn-sm" title="Add New Property">Add Property</a>
                            
                            <a href="/dashboard" class="btn btn-success btn-sm" title="Add New Property">Dashboard</a>
                            <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Address</th>
                                        <th>No. of bedrooms</th>
                                        <th>No. of bathrooms</th>
                                        <th>Actions</th>
                                    </tr>
                        
                                </thead>
                                <tbody>
                                    @foreach ( $HouseCategories as $item )
                                        
                        
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->Type}}</td>
                                        <td>{{$item->Address}}</td>
                                        <td>{{$item->Number_of_bedrooms}}</td>
                                        <td>{{$item->Number_of_bathrooms}}</td>
                            
                                    <td>
                                        <a href="" title="View House Category"><button class="btn btn-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"> </i>View</button></a>
                                        <a href="" title="Edit House Category"><button class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o" aria-hidden="true"> </i>Edit</button></a>
                                        
                                    <form method="POST" action="{{ route('housecategories.index', $item->id) }}" accept-charset="UTF-8" styles="display:inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete property" onclick="return confirm('Confirm delete?')"> <i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                         
                                </tbody>
                    
                    </div>   
                </div>
            </div>
           </div>
@endsection
