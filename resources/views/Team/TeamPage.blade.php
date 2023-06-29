@extends('layouts.main')

@section('content')
<script src="{{ asset('js/team.js') }}" defer></script>
<main class="scrool-snap" dir="ltr">
    @include('Team.Components.TeamPresentation',compact("team"))
    @include('Team.Components.TeamInfos',compact("team"))
    @include('Team.Components.TeamDrivers',compact("team"))
    @include('Team.Components.TeamMap',compact("team"))
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
