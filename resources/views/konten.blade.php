@extends('template')

@section('container')
<article class="mb-5">
    <h3>{{ $article->title }}</h3>
    {{-- href -> supaya bisa klik kategorinya dan diarahkan ke /categories/slug --}}
    <h6>By: <a href="#" class="text-decoration-none">{{ $article->user->name }}</a> in <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">
        {{ $article->category->name }}</a></h6>
    <p>{{ $article->body }}</p>

    <a href="/article" class="d-block mt-5">Back to articles</a>
</article>
@endsection