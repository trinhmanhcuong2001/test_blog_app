@extends('layout')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1 class="my-4">Post Detail {{ $post->id }}</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Publicshed</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th> {{ $post->id }} </th>
                    <td> {{ $post->title }} </td>
                    <td> {{ $post->content }} </td>
                    <td> {{ $post->published_at }} </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
