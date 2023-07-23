@extends('layouts.app')
@section('title','homePage')
@section('main-content')
<h1>
    homePage
</h1>
<div>
    @foreach($movies as $movie)
    <h3>
      <span class="font-weight-bold">TITLE: </span>
      {{ $movie->title }}
    </h3>
    <div class="nationality">
      <span class="font-weight-bold">NATIONALITY: </span>
      {{ $movie->nationality }}
    </div>
    <div class="date">
      <span class="font-weight-bold">DATE: </span>
      {{ $movie->date }}
    </div>
    <div class="vote">
      <span class="font-weight-bold">VOTE: </span>
      {{ $movie->vote }}
    </div>
    @endforeach
    
</div>
@endsection