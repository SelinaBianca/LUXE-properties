{{--@extends('admin.HouseCategories.layout')--}}
{{--@section('content')--}}

{{--           <div class="container" style="margin-top: 50px;">--}}
{{--            <div class="row" style="margin:20px:">--}}
{{--                <div class="col-12">--}}
{{--                    <div class = "card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h2>Properties</h2>--}}
{{--                        </div>--}}
{{--                        --}}
{{--                        <div class="card-body">--}}
{{--                            <a href="{{ url('/housecategories/create')}}" class="btn btn-success btn-sm" title="Add New Property">Add Property</a>--}}
{{--                            --}}
{{--                            <a href="/dashboard" class="btn btn-success btn-sm" title="Add New Property">Dashboard</a>--}}
{{--                            <br/>--}}
{{--                        <br/>--}}
{{--                        @if (session('success'))--}}
{{--                            <div id="success-message" class ="alert alert-success">--}}
{{--                                {{session('success')}}--}}
{{--                            </div> --}}
{{--                        @endif--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>ID</th>--}}
{{--                                        <th>Type</th>--}}
{{--                                        <th>Address</th>--}}
{{--                                        <th>No. of bedrooms</th>--}}
{{--                                        <th>No. of bathrooms</th>--}}
{{--                                        <th>Actions</th>--}}
{{--                                    </tr>--}}
{{--                        --}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                    @foreach ( $HouseCategories as $item )--}}
{{--                                        --}}
{{--                        --}}
{{--                                    <tr>--}}
{{--                                        <td>{{$loop->iteration}}</td>--}}
{{--                                        <td>{{$item->Type}}</td>--}}
{{--                                        <td>{{$item->Address}}</td>--}}
{{--                                        <td>{{$item->Number_of_bedrooms}}</td>--}}
{{--                                        <td>{{$item->Number_of_bathrooms}}</td>--}}
{{--                            --}}
{{--                                        <td style="display:-webkit-flex;">--}}
{{--                                            <!-- <a href="" title="Edit House Category"><button class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-o" aria-hidden="true"> </i>Edit</button></a> -->--}}
{{--                                            <a href="{{ route('housecategories.edit', $item->id) }}" class="btn btn-primary" style="height: 40px; margin-right:5px">Edit</a>--}}
{{--                                        --}}
{{--                                            <form method="POST" action="{{ route('housecategories.destroy', $item->id) }}" accept-charset="UTF-8" styles="display:inline">--}}
{{--                                                @csrf--}}
{{--                                                @method('delete')--}}
{{--                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete property" style="height: 40px;" onclick="return confirm('Confirm delete?')"> <i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>--}}
{{--                                            </form>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>   --}}
{{--                    </div>--}}
{{--                </div>--}}
{{--           </div>--}}
{{--           <script>--}}
{{--                setTimeout(function() {--}}
{{--                    document.getElementById('success-message').style.display = 'none';--}}
{{--                }, 2000); // Hide after 2 seconds--}}
{{--            </script>--}}
{{--@endsection--}}
@extends('admin.HouseCategories.layout')
@section('content')

    <div class="container" style="margin-top: 50px;">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Properties</h2>
                    </div>

                    <div class="card-body">
                        <a href="{{ url('/housecategories/create') }}" class="btn btn-success btn-sm" title="Add New Property">Add Property</a>
                        <a href="/dashboard" class="btn btn-success btn-sm" title="Dashboard">Dashboard</a>
                        <br/>
                        <br/>
                        @if (session('success'))
                            <div id="success-message" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Location</th>
                                    <th>Agent</th>
                                    <th>Contact Email</th>
                                    <th>Contact Phone</th>
                                    <th>Published At</th>
                                    <th>Slug</th>
                                    <th>Featured</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($HouseCategories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->agent }}</td>
                                        <td>{{ $item->contact_email }}</td>
                                        <td>{{ $item->contact_phone }}</td>
                                        <td>{{ $item->published_at }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>{{ $item->featured ? 'Yes' : 'No' }}</td>
                                        <td style="display: -webkit-flex;">
                                            <a href="{{ route('housecategories.edit', $item->id) }}" class="btn btn-primary btn-sm" style="height: 40px; margin-right: 5px">Edit</a>
                                            <form method="POST" action="{{ route('housecategories.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete property" style="height: 40px;" onclick="return confirm('Confirm delete?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'none';
        }, 2000); // Hide after 2 seconds
    </script>
@endsection
