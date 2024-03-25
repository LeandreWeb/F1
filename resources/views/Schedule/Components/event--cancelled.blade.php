<div class="event_container event_container--cancelled">
    <div class="event_track">
        @include('svg.CalendarTracks.' . $gp->track->name)
    </div>
    <div class="event_infos">
        <div class="event_info_title">
            <h3>{{ $gp->name }}</h3>
            <h4 class="event_info_title_cancelled">
                Annulé
            </h4>
        </div>
        <div class="event_info_events">
            <div class="links-wrapper">
                <div class="links-container">
                    <div class="links">
                        @if ($gp->article)
                            <a
                                href="{{ route('articleNews', ['id' => $gp->article->id]) }}">@include('Links.news')</a>
                        @else
                            <div class="article_to_do">@include('Links.news')</div>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        <h2 class="event_round">Ronde {{ $gp->round }}</h2>


    </div>


</div>

<style>

</style>
