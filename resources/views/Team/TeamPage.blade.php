@extends('layouts.main')

@section('content')
<script src="{{ asset('js/team.js') }}" defer></script>
<main>
    @include('Team.Components.TeamPresentation',compact("team"))
    @include('Team.Components.TeamInfos',compact("team"))
    @include('Team.Components.TeamDrivers',compact("team"))
</main>
<style>
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
    }



</style>

@endsection
