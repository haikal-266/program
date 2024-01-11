@extends('layout.manga')

@include('partial.navbar')
@section('manga')
    <div class="container mt-5 bg-body-tertiary text-dark p-5">
        @foreach ($post as $post)
            <h2>
                <a href="/tmdc">{{ $post["Judul"] }}</a>
            </h2>
            <h5>{{ $post["Author"] }}</h5>
            <h6>{{ $post["Genre"] }}</h6>
            <p class="mt-4">{{ $post["Sinopsis"] }}</p>
            <hr>   
            <p class="mt-3"></p>
        @endforeach
    </div>    
@endsection
