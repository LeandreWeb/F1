@php
    $imagePath;

    if ($eventType == 'article') {
        $imagePath = 'Images/Articles/' . $event->id . '.jpg';
        $catchphrase = $event->catchphrase;
        $title = $event->title;
    } elseif ($eventType == 'qualification') {
        $year= $event->grandPrixWeekend->season_id;
        $imagePath = 'Images/Stories/'. $year .'/'.'Qualifications/Main/' . $event->grandPrixWeekend->name . '.jpg';
        $catchphrase = $event->qualificationStory->catchphrase;;
        $title = 'Qualifications';
    } elseif ($eventType == 'sprint shootout') {
        $year= $event->grandPrixWeekend->season_id;
        $catchphrase = $event->sprintshootoutStory->catchphrase;
        $imagePath = 'Images/Stories/'. $year .'/'.'SprintShootouts/Main/' . $event->grandPrixWeekend->name . '.jpg';
        $title = 'Sprint Shootout';
    } elseif ($eventType == 'sprint') {
        $year= $event->grandPrixWeekend->season_id;
        $catchphrase = $event->sprintStory->catchphrase;
        $imagePath = 'Images/Stories/'. $year .'/'.'Sprints/Main/' . $event->grandPrixWeekend->name . '.jpg';
        $title = 'Sprint';
    } else {
        $year= $event->grandPrixWeekend->season_id;
        $catchphrase = $event->raceStory->catchphrase;
        $imagePath = 'Images/Stories/'. $year .'/'.'Races/Main/' . $event->grandPrixWeekend->name . '.jpg';
        $title = 'Course';
    }

    
@endphp



<section id="News-Top5">
    <a href="{{ route($eventType . 'News', ['id' => $event->id]) }}" class="top-news">
        <h4 class="top-left">Nouvelle</h4>
        <img class="news-img" src="{{ asset($imagePath) }}" alt="">
        <div class="news-title">
            <h2>{{ $title }} {{ $event->grandPrixWeekend->country->name }}</h2>
            <h3>{{ $catchphrase }}</h3>
        </div>
    </a>

    @isset($top5[0])
    <div class="top5">
        <h2>Top 5</h2>
        <div class="top5-drivers"->
                @for ($i = 0; $i < 5; $i++)
                @include('Home.Components.driver-card', ['position' => $i, 'teamDriver' => $top5[$i]])
                @endfor
        </div>
    </div>
    @endisset ()
</section>

