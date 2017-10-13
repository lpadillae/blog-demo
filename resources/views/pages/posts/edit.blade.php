@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.errors')

        <form action="{{ route('posts.update', $post->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            @include('pages.posts.partials.fields')
        </form>
    </div>
@endsection