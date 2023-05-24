@extends('layouts.main')

@section('content')
    <main class="in_construction">
        <h1>Calendrier</h1>
        @include('.components.constuction')


        @include('.svg.CalendarTracks.Circuit International de Bahrain')
        @include('.svg.CalendarTracks.Circuit de la corniche de Djeddah')
        @include('.svg.CalendarTracks.Circuit parcs Albert')
        @include('.svg.CalendarTracks.Circuit ville de Baku')
        @include('.svg.CalendarTracks.Autodrome International de Miami')
        @include('.svg.CalendarTracks.Autodrome Enzo e Dino Ferrari')
        @include('.svg.CalendarTracks.Circuit de Monaco')
        @include('.svg.CalendarTracks.Circuit de Barcelona-Catalunya')
        @include('.svg.CalendarTracks.Circuit Gilles-Villeneuve')
        @include('.svg.CalendarTracks.Red Bull Ring')

    </main>
@endsection
