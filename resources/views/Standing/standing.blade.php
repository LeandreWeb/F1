@extends('layouts.main')

@section('content')
<main class="in_construction">
    <h1>Classement</h1>
    @foreach ( $teams as $team )
        <h3>{{$team->points}}</h3>
    @endforeach
</main>

@endsection

