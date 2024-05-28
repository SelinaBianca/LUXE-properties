
@extends('admin.HouseCategories.layout')
@section('content')

    <div class="card" style="margin:20px; margin-top:50px !important;">
        <div class="card-header">Create New Property</div>

        <div class="card-body">

            <form action="{{ route('housecategories.store') }}" method="POST" enctype="multipart/form-data">
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

                @csrf

                <label>Title</label>
                <input type="text" name="title" id="title" class="form-control" required><br>

                <label>Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea><br>

                <label>Price</label>
                <input type="text" name="price" id="price" class="form-control" required><br>

                <label>Category</label>
                <input type="text" name="category" id="category" class="form-control" required><br>

                <label>Location</label>
                <input type="text" name="location" id="location" class="form-control" required><br>

                <label>Agent</label>
                <input type="text" name="agent" id="agent" class="form-control" required><br>

                <label>Contact Email</label>
                <input type="email" name="contact_email" id="contact_email" class="form-control" required><br>

                <label>Contact Phone</label>
                <input type="text" name="contact_phone" id="contact_phone" class="form-control" required><br>

                <label>Images</label>
                <input type="file" name="images[]" id="images" class="form-control" multiple><br>

                <label>Published At</label>
                <input type="datetime-local" name="published_at" id="published_at" class="form-control"><br>

                <label>Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" required><br>

                <label>Featured</label>
                <select name="featured" id="featured" class="form-control" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select><br>

                <input type="submit" value="Save" class="btn btn-success">

            </form>
        </div>
    </div>

@endsection

