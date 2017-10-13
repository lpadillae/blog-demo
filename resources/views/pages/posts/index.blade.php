@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.errors')
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{ route('posts.create') }}">
                        Create new post
                    </a>
                </li>
            </ul>
        </div>
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
                            <a href="{{ route('posts.show', $post->id) }}">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $posts->links() }}
        </div>
    </div>
@endsection