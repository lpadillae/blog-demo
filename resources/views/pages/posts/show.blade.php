@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.errors')
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('posts.index') }}">
                        View all posts
                    </a>
                </li>
                <li>
                    <a href="{{ route('posts.edit', $post->id) }}">
                        Edit post
                    </a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-condensed">
                    <tbody>
                    <tr>
                        <td>ID:</td>
                        <td>{{ $post->id }}</td>
                    </tr>
                    <tr>
                        <td>Title:</td>
                        <td>{{ $post->title }}</td>
                    </tr>
                    <tr>
                        <td>Content:</td>
                        <td>{{ $post->body }}</td>
                    </tr>
                    <tr>
                        <td>Created by:</td>
                        <td>{{ $post->user->name }}</td>
                    </tr>
                    <tr>
                        <td>Created at:</td>
                        <td>{{ $post->created_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
@endsection