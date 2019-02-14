@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <h4>Welcome</h4>
                    </div>
                    <div class=" form-row card-body col-md-12">
                        @foreach($posts as $post)
                            <tr>
                                <div class="col-md-9">
                                    <td><a href="{{route('admin.post.show', $post->id)}}">{{$post->title}}</a></td>
                                </div>
                                <div class="col-md-2">
                                    <td>{{$post->created_at}}</td>
                                </div>
                                <div class="col-md-1 ">
                                    <td><a href="{{ route('admin.post.edit',$post->id)}}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.post.destroy',$post->id) }}"
                                           onclick="return confirm('Bạn có muốn xoá ? ')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </div>
                            </tr>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('admin.post.store') }}">
                    <button class="btn btn-primary">post now!!</button>
                </a>
                <div class="float-right">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center" style="margin-top: 200px">
        <div class="card-footer text-muted">
            <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="far fa-envelope"></i> Email</a>
            <p> <i class="fas fa-phone"></i> : 123456789
                <i class="fas fa-home"></i>: Ha Noi
            </p>
            <p>  </p>
        </div>
    </footer>
@endsection
