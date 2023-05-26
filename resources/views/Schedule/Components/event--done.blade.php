<div class="event_container">
    <div class="event_track">
        @include('svg.CalendarTracks.' . $gp->track->name)
    </div>
    <div class="event_infos">
        <div class="event_info_title">
            <h3>{{ $gp->name }}</h3>
        </div>
        <div class="event_info_events">
            <a href="{{ route('qualificationNews', ['id' => $gp->id]) }}">Qualification</a>
            @if ($gp->sprint_shootout_id)
                <a href="{{ route('sprint shootoutNews', ['id' => $gp->id]) }}">Sprint Shootout</a>
            @endif
            @if ($gp->sprint)
                <a href="{{ route('sprintNews', ['id' => $gp->id]) }}">Sprint</a>
            @endif
            <a href="{{ route('raceNews', ['id' => $gp->id]) }}">Course</a>


        </div>

        <h2 class="event_round">Ronde {{ $gp->id }}</h2>


    </div>


</div>

<style>

</style>
