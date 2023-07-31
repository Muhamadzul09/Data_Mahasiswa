{{-- untuk mengecek data sudah masuk atau tidak --}}
{{-- @dd($posts) --}}

@extends('awal.layouts.main')

@section('container')
    @foreach ($posts as $post )
    <h2>
        <a href="/galeries/{{ $post["slug"] }}">{{ $post["title"] }}</a>
    </h2>
    <h5> By: {{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
    @endforeach 
@endsection