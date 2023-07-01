@php
    \Carbon\Carbon::setLocale('fr');
    $qualidate = \Carbon\Carbon::parse($gp->qualification->date);
    $formattedDatequali = $qualidate->translatedFormat('j F ');

    $racedate = \Carbon\Carbon::parse($gp->race->date);
    $formattedDaterace = $racedate->translatedFormat('j F ');

    if ($gp->sprint_shootout_id) {
        $sprintShootoutDate = \Carbon\Carbon::parse($gp->sprintShootout->date);
        $formattedDateSprintShootout = $sprintShootoutDate->translatedFormat('j F ');
    }

    if ($gp->sprint) {
        $sprintDate = \Carbon\Carbon::parse($gp->sprint->date);
        $formattedDateSprint = $sprintDate->translatedFormat('j F ');
    }

@endphp
<div class="event_wrapper" id="current">
    <div class="event_container event_container--current" >
        <div class="event_track">
            @include('svg.CalendarTracks.' . $gp->track->name)
        </div>
        <div class="event_infos">
            <div class="event_info_title">
                <h3>{{ $gp->name }}</h3>
            </div>
            <div class="event_info_events">
                @if ($gp->qualification->qualification_story_id)
                    <a href="{{ route('qualificationNews', ['id' => $gp->id]) }}">Qualifications</a>
                @else
                    <p>
                        Qualification: {{ $formattedDatequali }}{{ $gp->qualification->start }}
                    </p>
                @endif
                @if ($gp->sprintShootout)
                    @if ($gp->sprintShootout->sprint_shootout_story_id)
                        <a href="{{ route('sprint shootoutNews', ['id' => $gp->id]) }}">Sprint Shootout</a>
                    @else
                        <p>Sprint Shootout {{ $formattedDateSprintShootout }} {{ $gp->sprintShootout->start }}</p>
                    @endif
                @endif
                @if ($gp->sprint)

                    @if ($gp->sprint->sprint_story_id)
                        <a href="{{ route('sprintNews', ['id' => $gp->id]) }}">Sprint</a>
                    @else
                        <p>Sprint {{ $formattedDateSprint }} {{ $gp->sprint->start }}</p>
                    @endif
                @endif
                @if ($gp->race->race_story_id)
                    <a href="{{ route('raceNews', ['id' => $gp->id]) }}">Course</a>
                @else
                    <p>
                        Course: {{ $formattedDaterace }}{{ $gp->race->start }}
                    </p>
                @endif



            </div>

            <h2 class="event_round">Ronde {{ $gp->id }}</h2>
            <h2 class="event_status">GP du Weekend</h2>
        </div>


    </div>
</div>


<style>

</style>
