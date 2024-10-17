@extends('layout')
@section('content')
    <div class="container my-4">
        @include('alert')
        <h1 class="my-2">Edit Post</h1>
        <form action={{ URL::to('/update', $post->id) }} method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputTitle" name="title" value={{ $post->title }}>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Content</label>
                <textarea class="form-control" id="exampleInputPassword1" name="content">{{ $post->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
