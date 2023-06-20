@extends('layouts.main')

@section('content')
<script src="{{ asset('js/team.js') }}" defer></script>
<main>
    @include('Team.Components.TeamPresentation',compact("team"))
    @include('Team.Components.TeamDrivers',compact("team"))
</main>
<style>
    

</style>

@endsection
