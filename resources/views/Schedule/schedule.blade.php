@extends('layouts.main')

@section('content')
    <main class="in_construction">
        <h1>Calendrier</h1>
        @include('.components.constuction')


        @include('.svg.CalendarTracks.Circuit International de Bahrain')
        @include('.svg.CalendarTracks.Circuit de la corniche de Djeddah')

    </main>
@endsection
