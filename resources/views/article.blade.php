@extends('template')

@section('container')
    <h1>{{ $title }}</h1>
    {{-- <hr/> --}}
    @foreach($articles as $article)
        <article class="mb-5 border-bottom pb-4">
            <h3>
                {{-- menghilangkan underline -> class="text-decoration-none" --}}
                <a href="/article/{{ $article->slug }}" class="text-decoration-none">
                {{ $article->title}}
                </a>                    
            </h3>
            <h6>
                By: <a href="/authors/{{ $article->author->username }}" class="text-decoration-none">{{ $article->author->name }}</a> in 
                <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none" > {{ $article->category->name }}</a>
            </h6>
            <p>{{ $article->excerpt }}</p>
            <a href="/article/{{ $article->slug }}" class="text-decoration-none"> Read more..</a>
        </article>
    @endforeach
@endsection
