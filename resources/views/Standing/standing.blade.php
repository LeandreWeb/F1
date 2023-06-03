@php
    $teamsCount = 1;
@endphp
@extends('layouts.main')



@section('content')
    <main class="in_construction">
        <h1>Classement</h1>
        <ul>
            @foreach ($drivers as $position=>$driver)
                @include('Standing.Components.driver',compact("driver","position"))
            @endforeach
        </ul>
        <ul>
            @foreach ($teams as $key => $team)
                <li>{{ $team->Name }} {{ $teamsCount }}</li>

                @php
                    $teamsCount ++;
                @endphp
            @endforeach
        </ul>
    </main>
@endsection
