@extends('layouts.main')

@section('content')
<main>
@include('Home.Components.news')
@include('Home.Components.next-race')
</main>


    
    

    {{-- <a href="{{route('allDrivers')}}">Drivers</a> --}}
@endsection

