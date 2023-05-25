@extends('layouts.main')

@section('content')
    <main class="schedule">
        <h1 class="schedule_Title">Calendrier</h1>

        @foreach ($GrandPrixWeekends as $gp)
            @include('Schedule.Components.event--' .$gp->status ,compact("gp"))
        @endforeach

        {{-- @include('.svg.CalendarTracks.Circuit International de Bahrain')
        @include('.svg.CalendarTracks.Circuit de la corniche de Djeddah')
        @include('.svg.CalendarTracks.Circuit parcs Albert')
        @include('.svg.CalendarTracks.Circuit ville de Baku')
        @include('.svg.CalendarTracks.Autodrome International de Miami')
        @include('.svg.CalendarTracks.Autodrome Enzo e Dino Ferrari')
        @include('.svg.CalendarTracks.Circuit de Monaco')
        @include('.svg.CalendarTracks.Circuit de Barcelona-Catalunya')
        @include('.svg.CalendarTracks.Circuit Gilles-Villeneuve')
        @include('.svg.CalendarTracks.Red Bull Ring')
        @include('.svg.CalendarTracks.Circuit de Silverstone')
        @include('.svg.CalendarTracks.Hungaroring')
        @include('.svg.CalendarTracks.Circuit de Spa-Francorchamps')
        @include('.svg.CalendarTracks.Circuit Zandvoort')
        @include('.svg.CalendarTracks.Autodrome National de Monza')
        @include('.svg.CalendarTracks.Circuit Rural de Marina Bay')
        @include('.svg.CalendarTracks.Circuit International de Suzuka')
        @include('.svg.CalendarTracks.Circuit International de Lusail')
        @include('.svg.CalendarTracks.Circuit des Amériques')
        @include('.svg.CalendarTracks.Autodrome Hermanos Rodriguez')
        @include('.svg.CalendarTracks.Autodrome José Carlos Pace')
        @include('.svg.CalendarTracks.Las Vegas')
        @include('.svg.CalendarTracks.Circuit Yas Marina') --}}



        {{-- Test pour Qualifications --}}
        {{-- @include('.svg.Qualifications.Circuit de Monaco') --}}


    </main>


    <style>
        .schedule_Title {
            text-align: center;
            font-size: 5.6rem;
            margin-top: 1rem;
            -webkit-text-stroke: .1rem var(--accent);
            color: transparent;

        }

        .gp-done {
            color: green
        }
        .gp-cancelled {
            color: red
        }
        .gp-incoming {
            color: orchid
        }

    </style>
@endsection
