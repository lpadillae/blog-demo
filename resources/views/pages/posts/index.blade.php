@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created by</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>
                            <a href="{{ action('PostController@show', ['id' => $post->id ]) }}">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $posts->links() }}
        </div>
    </div>
@endsection