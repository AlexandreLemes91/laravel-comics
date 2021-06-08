@extends('layouts.layout')

@section('content')
    <section class="container">

        @foreach ($comics as $comic)
            <div class="comic">
                <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                <h2>{{ $comic['title'] }}</h2>
            </div>
        @endforeach
    </section>
@endsection