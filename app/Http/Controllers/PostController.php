<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.list', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->summary = $request->input('summary');
        $post->content = $request->input('content');
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $image = $request->image;
                $clientName = $image->getClientOriginalName();
                $path = $image->move(public_path('image/'), $clientName);
                $post->image = $clientName;
            }
        }
        $post->save();
        return redirect()->route('admin.post.index');

    }

    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('admin.post.show', compact('posts'));
    }

    public function edit($id)
    {
        return view('admin.post.edit');
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->summary = $request->input('summary');
        $post->content = $request->input('content');
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $image = $request->image;
                $clientName = $image->getClientOriginalName();
                $path = $image->move(public_path('image/'), $clientName);
                $post->image = $clientName;
            }
        }
        $post->save();
        Session::flash('success', 'Cập nhật bài viết thành công');

        return redirect()->route('admin.post.index');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        Session::flash('success', 'Xoa thanh cong');
        return redirect()->route('admin.post.index');

    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('admin.post.index');
        }
        $posts = Post::where('title', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('admin.post.list', compact('posts'));
    }

}
