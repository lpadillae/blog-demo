@extends('layouts.app')

@section('content')
    <div class="container">
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
@endsection