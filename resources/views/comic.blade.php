@extends('layouts.app')


@section ('main-content')

<div class="jumbo-container">
    <img  src="{{Vite::asset('resources/assets/img/jumbotron.jpg')}}" alt="jumbo image">
</div>
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-2">
            <div class="comic">
                <img src="{{comic[thumb]}}" alt="comic image">
                <h3>{{comic[series]}}</h3>
                <h4>{{comic[price]}}</h4>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection