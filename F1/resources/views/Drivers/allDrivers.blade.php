@extends('layouts.main')

@section('content')
<main>
    <h1>Drivers</h1>


    <?php foreach ($drivers as $driver): ?> 
        <p>{{$driver['Lastname']}}</p>
    <?php endforeach ?>

    <a href="{{route('home')}}">Home</a>
</main>
@endsection
