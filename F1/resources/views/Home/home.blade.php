@extends('layouts.main')

@section('content')
<main>
@include('Home.Components.news',["top3"=>$top3,"lastRace"=>$lastRace,"country"=>$country])
@include('Home.Components.next-race')
</main>


    
    

    {{-- <a href="{{route('allDrivers')}}">Drivers</a> --}}
@endsection

