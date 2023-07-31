{{-- untuk mengecek data sudah masuk atau tidak --}}
{{-- @dd($posts) --}}

@extends('awal.layouts.main')

@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5> By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/galeries">Back to galery  </a>
@endsection 