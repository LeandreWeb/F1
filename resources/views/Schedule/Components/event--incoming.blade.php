@php
    \Carbon\Carbon::setLocale('fr');
    // $qualidate = \Carbon\Carbon::parse($gp->qualification->date);
    // $formattedDatequali = $qualidate->translatedFormat('j F ');

    $racedate = \Carbon\Carbon::parse($gp->race->date);
    $formattedDaterace = $racedate->translatedFormat('j F ');

    // if ($gp->sprint_shootout_id){
    //   $sprintShootoutDate = \Carbon\Carbon::parse($gp->sprintShootout->date);
    // $formattedDateSprintShootout = $sprintShootoutDate->translatedFormat('j F ');
    // }



    // if ($gp->sprint){ $sprintDate = \Carbon\Carbon::parse($gp->sprint->date);
    // $formattedDateSprint = $sprintDate->translatedFormat('j F ');}




@endphp



<div class="event_container event_container--incoming">
    <div class="event_track">
        @include('svg.CalendarTracks.' . $gp->track->name)
    </div>
    <div class="event_infos">
        <div class="event_info_title">
            <h3>{{ $gp->name }}</h3>
        </div>
        <div class="event_info_events">
            {{-- <p>Qualification : {{ $formattedDatequali }}</p>

            @if ($gp->sprint_shootout_id)
            <p>Sprint Shootout : {{ $formattedDateSprintShootout}}</p>

            @endif
            @if ($gp->sprint)
            <p>Sprint : {{ $formattedDateSprint}}</p>
            @endif --}}
            <p>Course : {{ $formattedDaterace }}</p>

        </div>

        
        
    </div>
    <h2 class="event_round">Ronde {{ $gp->round }}</h2>


</div>

<style>

</style>
