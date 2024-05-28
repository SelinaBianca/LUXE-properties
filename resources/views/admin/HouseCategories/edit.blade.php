

{{--@extends('admin.HouseCategories.layout')--}}
{{--@section('content')--}}
{{--  --}}
{{--<div class="card" style="margin:20px;">--}}
{{--  <div class="card-header">Edit Property</div>--}}
{{--  <div class="card-body">--}}
{{--       --}}
{{--    <form action="{{ route('housecategories.update' ,$houseCategory->id) }}" method="POST">--}}
{{--      {!! csrf_field() !!}--}}
{{--      @method('PUT')--}}

{{--      @if (session('success'))--}}
{{--          <div class ="alert alert-success">--}}
{{--          {{session('success')}}--}}
{{--          </div> --}}
{{--      @endif--}}

{{--      @if (session('errors'))--}}
{{--          <div class ="alert alert-danger">--}}
{{--          {{session('errors')}}--}}
{{--          </div> --}}
{{--      @endif--}}
{{--      <input type="hidden" name="id" value="{{ $houseCategory->id }}" />--}}

{{--      <label>Type</label><br>--}}
{{--      <input type="text" name="type" value="{{ $houseCategory->Type }}" class="form-control" required><br>--}}

{{--      <label>Address</label><br>--}}
{{--      <input type="text" name="address" value="{{ $houseCategory->Address }}" class="form-control" required><br>--}}

{{--      <label>Number of Bedrooms</label><br>--}}
{{--      <input type="text" name="bedrooms" value="{{ $houseCategory->Number_of_bedrooms }}" class="form-control" required><br>--}}

{{--      <label>Number of Bathrooms</label><br>--}}
{{--      <input type="text" name="bathrooms" value="{{ $houseCategory->Number_of_bathrooms }}" class="form-control" required><br>--}}

{{--      <input type="submit" value="Update O" class="btn btn-success">--}}
{{--  </form>--}}
{{--  --}}
{{--    --}}
{{--  </div>--}}
{{--</div>--}}
{{--  --}}
{{--@endsection--}}

@extends('admin.HouseCategories.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit Property</div>
        <div class="card-body">

            <form action="{{ route('housecategories.update', $houseCategory->id) }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @method('PUT')

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <input type="hidden" name="id" value="{{ $houseCategory->id }}" />

                <label>Title</label><br>
                <input type="text" name="title" value="{{ $houseCategory->title }}" class="form-control" required><br>

                <label>Description</label><br>
                <textarea name="description" class="form-control" required>{{ $houseCategory->description }}</textarea><br>

                <label>Price</label><br>
                <input type="text" name="price" value="{{ $houseCategory->price }}" class="form-control" required><br>

                <label>Category</label><br>
                <input type="text" name="category" value="{{ $houseCategory->category }}" class="form-control" required><br>

                <label>Location</label><br>
                <input type="text" name="location" value="{{ $houseCategory->location }}" class="form-control" required><br>

                <label>Agent</label><br>
                <input type="text" name="agent" value="{{ $houseCategory->agent }}" class="form-control" required><br>

                <label>Contact Email</label><br>
                <input type="email" name="contact_email" value="{{ $houseCategory->contact_email }}" class="form-control" required><br>

                <label>Contact Phone</label><br>
                <input type="text" name="contact_phone" value="{{ $houseCategory->contact_phone }}" class="form-control" required><br>

                <label>Images</label><br>
                <input type="file" name="images[]" class="form-control" multiple><br>
                @if ($houseCategory->images)
                    <div class="mt-2">
                        @foreach (json_decode($houseCategory->images) as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="Image" width="100" class="img-thumbnail">
                        @endforeach
                    </div>
                @endif
                <br>

                <label>Published At</label><br>
                <input type="datetime-local" name="published_at" value="{{ $houseCategory->published_at ? \Carbon\Carbon::parse($houseCategory->published_at)->format('Y-m-d\TH:i') : '' }}" class="form-control"><br>

                <label>Slug</label><br>
                <input type="text" name="slug" value="{{ $houseCategory->slug }}" class="form-control" required><br>

                <label>Featured</label><br>
                <select name="featured" class="form-control" required>
                    <option value="1" {{ $houseCategory->featured ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$houseCategory->featured ? 'selected' : '' }}>No</option>
                </select><br>

                <input type="submit" value="Update Property" class="btn btn-success">
            </form>
        </div>
    </div>

@endsection
