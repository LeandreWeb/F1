@extends('layouts.main')

@section('content')
<main class="teams">
    <h2 class="teams_title">Équipes</h2>
    @foreach ($teams as $team)
        <p>{{$team}}</p>
    @endforeach
</main>

<style>
    
</style>

@endsection




