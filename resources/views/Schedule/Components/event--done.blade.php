<div class="event_container">
    <div class="event_track">
        @include('svg.CalendarTracks.' . $gp->track->name)
    </div>
    <div class="event_infos">
        <div class="event_info_title">
            <h3>{{ $gp->name }}</h3>
        </div>
        <div class="event_info_events">
            <section class="links-wrapper">
                <div class="links-container">
                    <div class="links">
                        @if ($gp->qualification->qualification_story_id)
                            <a href="{{ route('qualificationNews', ['id' => $gp->id]) }}">@include('Links.quali')</a>
                        @else
                            <div class="article_to_do">Qualification</div>
                        @endif
                        @if ($gp->sprint_shootout_id)
                            @if ($gp->sprintShootout->sprint_shootout_story_id)
                                <a href="{{ route('sprint shootoutNews', ['id' => $gp->id]) }}">@include('Links.sprintShootout')</a>
                            @else
                                <div class="article_to_do">Sprint Shootout</div>
                            @endif
                        @endif
                        @if ($gp->sprint)
                            @if ($gp->sprint->sprint_story_id)
                                <a href="{{ route('sprintNews', ['id' => $gp->id]) }}">@include('Links.sprint')</a>
                            @else
                                <div class="article_to_do">Sprint</div>
                            @endif
                        @endif
                        @if ($gp->race->race_story_id)
                            <a href="{{ route('raceNews', ['id' => $gp->id]) }}">@include('Links.race')</a>
                        @else
                            <div class="article_to_do">race</div>
                        @endif
                    </div>
                </div>
            </section>

        </div>
        <h2 class="event_round">Ronde {{ $gp->round }}</h2>
    </div>
</div>

<style>

</style>
