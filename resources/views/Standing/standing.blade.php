@extends('layouts.main')

@section('content')
<main class="in_construction">
    <h1>Classement</h1>
    @for ($position = 1; $position <count($teams)+1 ; $position++)
        <h3>{{$position}}<h3>


    @endfor
</main>

@endsection

