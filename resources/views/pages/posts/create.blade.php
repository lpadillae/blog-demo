@extends('layouts.app')

@section('content')
    <div class="container">
        @include('includes.errors')

        <form action="{{ route('posts.store') }}" method="post">
            {{ csrf_field() }}

            @include('pages.posts.partials.fields')
        </form>
    </div>
@endsection