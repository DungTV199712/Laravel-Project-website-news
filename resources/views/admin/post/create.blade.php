@extends('layouts.app')
@section('title', 'add new')
@section('content')
    <div class="container">
        <h3>Create post!</h3>

        <form method="post" action="{{route('admin.post.store')}}" enctype="multipart/form-data" class="was-validated">
            @csrf
            <div class="mb-1">
                <label for="validationTextarea">Title</label>
                <textarea name="title" class="form-control is-invalid" id="validationTextarea"
                          placeholder="Title"
                          required></textarea>
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="mb-3">
                <label for="validationTextarea">Summary</label>
                <textarea name="summary" class="form-control is-invalid" id="validationTextarea"
                          placeholder="Summary"
                          required></textarea>
                <div class="invalid-feedback">

                </div>
            </div>
            <div class="mb-3">
                <label for="validationTextarea">Content</label>
                <textarea name="content" class="form-control is-invalid" id="validationTextarea"
                          placeholder="Content"
                          required></textarea>
                <div class="invalid-feedback">
                </div>
            </div>

            <label>Image</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="validatedCustomFile" multiple required>
                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                <div class="invalid-feedback">Image can not empty</div>
            </div>


            <div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection
