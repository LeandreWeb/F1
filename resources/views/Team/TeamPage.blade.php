@extends('layouts.main')

@section('content')
<script src="{{ asset('js/team.js') }}" defer></script>
<main class="scrool-snap" dir="ltr">
    @include('Team.Components.TeamPresentation',compact("seasonTeam"))
    @include('Team.Components.TeamInfos',compact("seasonTeam"))
    @include('Team.Components.TeamDrivers',compact("seasonTeam"))
    @include('Team.Components.TeamMap',compact("seasonTeam"))
    @include('Team.Components.TeamCar',compact("seasonTeam"))

</main>
<style>
    html {
        scroll-snap-type: y proximity ;
    }
    .team--title{
      font-size: 6.4rem;
      font-weight: 900;
    }

    @media screen and (max-width: 475px) {
        .team--title{
            font-size: 3.2rem;
        }
    }
    @media screen and (max-height: 500px) {
        .team--title{
            font-size: 3.2rem;
        }
    }mapbox://styles/leandrebb/cljfzjb6c00i801ozcwii2nkm



</style>

@endsection
