@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4>Welcome</h4>
                    </div>
                    <div class=" form-row card-body col-md-12">
                        @foreach($posts as $post)
                            <tr>
                                <div class="col-md-11">
                                    <td><a href="{{route('admin.post.list')}}">{{$post->title}}</a></td>
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
                        <a href="{{ route('admin.post.store') }}">
                            <button class="btn btn-primary">post now!!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
