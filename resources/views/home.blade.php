@extends('layouts.app')
@section('film-cards')
    @foreach ($comics as $comic)
        <div class="card-element">
            <img src="imageUrl" alt="">
            <h2>{{ $item['title'] }}</h2>
            
        </div>
    @endforeach
@endsection
{{-- @include('partials.filmCard') --}}
