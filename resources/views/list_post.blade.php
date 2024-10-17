@extends('layout')
@section('content')
    <div class="container">
        @include('alert')
        <div class="d-flex justify-content-between">
            <h1 class="my-4">List Post</h1>
            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-outline-primary"><a class="text-dark"
                        href={{ URL::to('/create') }}>Create</a></button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Publicshed</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th> {{ $post->id }} </th>
                        <td> <a href={{ URL::to('/show', $post->id) }}>{{ $post->title }}</a> </td>
                        <td> {{ $post->content }} </td>
                        <td> {{ $post->published_at }} </td>
                        <td>
                            <a href={{ URL::to('/edit', $post->id) }}>Edit</a>
                            <a href={{ URL::to('/delete', $post->id) }}>Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
