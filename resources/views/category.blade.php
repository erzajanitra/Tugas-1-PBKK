@extends('template')
{{-- /categories/Programming --}}
{{-- buat tampilin post2 yg masuk kategori --}}
@section('container')
    <h1>Post Category : {{ $category }} </h1>
    <hr/>
    @foreach($articles as $article)
        <article class="mb-5">
            <h3>
                <a href="/article/{{ $article->slug }}">
                {{ $article->title}}
                </a>                    
            </h3>
            <p>{{ $article->excerpt }}</p>
        </article>
    @endforeach
@endsection
