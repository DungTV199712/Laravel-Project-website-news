@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Update post!</h3>

        <form method="post" action="{{ route('admin.post.update', $posts->id)}}" class="was-validated" enctype="multipart/form-data">
            @csrf
            <div class="mb-1">
                <label for="validationTextarea">Title</label>
                <textarea name="title" class="form-control is-invalid"
                          required>{{ $posts->title }}</textarea>
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="mb-3">
                <label for="validationTextarea">Summary</label>
                <textarea name="summary" class="form-control is-invalid"
                          required>{{ $posts->summary }}</textarea>
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="mb-3">
                <label for="validationTextarea">Content</label>
                <textarea name="content" class="form-control is-invalid"
                          required>{{ $posts->content }}</textarea>
                <div class="invalid-feedback">
                </div>
            </div>

            <label>Image</label>
            <div class="p-2">
                <img style="height: 100px; width: 120px" src="{{ '/image/'.$posts->image }}">
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image">
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback">Image can not empty</div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button href="{{route('admin.post.index')}}" class="btn btn-danger">Cancel</button>
            </div>
        </form>
    </div>
@endsection
