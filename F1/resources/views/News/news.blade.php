@extends('layouts.main')

@section('content')
<main>
    <h1>{{$raceStory->catchphrase}}</h1>
    <p>{{$raceStory->intro}}</p>
    <hr>
    <br>
    <p>{{$raceStory->first_part}}</p>
    <hr>
    <br>
    <p>{{$raceStory->middle_part}}</p>
    <hr>
    <br>
    <p>{{$raceStory->last_part}}</p>
    <hr>
    <br>
    <p>{{$raceStory->conclusion}}</p>
    
</main>
    
@endsection


