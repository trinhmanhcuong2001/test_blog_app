<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\CreateFormRequest;
use App\Http\Requests\UpdateFormRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('published_at', 'desc')->get();
        return view('list_post', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('create_post');
    }

    public function store(CreateFormRequest $request)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'published_at' => Carbon::now()
        ];

        Post::create($data);

        return redirect('/')->with('success', 'Create post successfully!');
    }

    public function edit(Post $post)
    {
        return view('edit_post', [
            'post' => $post,
        ]);
    }

    public function update(UpdateFormRequest $request, $post)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'published_at' => Carbon::now()
        ];

        $post = Post::find($post);
        $post->update($data);

        return redirect('/')->with('success', 'Update Post Successfully');
    }

    public function delete($post)
    {
        $post = Post::find($post);
        $post->delete();

        return redirect('/')->with('success', 'Delete Successfully');
    }

    public function show(Post $post)
    {
        return view('show_post', [
            'post' => $post
        ]);
    }
}
