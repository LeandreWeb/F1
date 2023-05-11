@extends('layouts.main')

@section('content')
<main class="in_construction">
    <h1>Pilotes</h1>
    @include('.components.constuction')



    {{-- <?php foreach ($drivers as $driver): ?>
        <p>{{$driver->Lastname}}</p>
    <?php endforeach ?>

    <a href="{{route('home')}}">Home</a> --}}
</main>
@endsection
