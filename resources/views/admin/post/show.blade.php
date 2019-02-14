@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <div class="card-header text-center">
                <h2>{{ $posts->title }}</h2>
            </div>
            <div class='card-body'>
                <p class="text-">{{ $posts->summary }}</p>
                <div class="text-center">
                    <img style="height: 50%; width: 60%" src="{{ '/image/'.$posts->image }}">
                </div>
                <div class="col-md">
                    {{ $posts->content }}
                </div>
            </div>
            <a href="{{route('admin.post.index')}}" class="btn btn-outline-primary" style="margin-left: 269px">Back</a>
        </div>
    </div>
@endsection
