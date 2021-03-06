@extends('template')


{{-- buat /categories --}}
@section('container')
    <h1>Post Categories </h1>
    
    @foreach($categories as $category)
    <ul class="pt-4">
        <li>
            <h4>
                <a href="/categories/{{ $category->slug }}" class="text-decoration-none">
                {{ $category->name}}
                </a>                    
            </h4>
        </li>
    </ul>
       
    @endforeach
@endsection
