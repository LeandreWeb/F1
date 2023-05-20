@php
    $imagePath;

    if ($eventType == 'article') {
        $imagePath = 'Images/Articles/' . $event->id . '.jpg';
        $catchphrase = $event->catchphrase;
        $title = $event->title;
    } elseif ($eventType == 'qualification') {
        $imagePath = 'Images/Stories/Qualifications/Main/' . $event->grandPrixWeekend->name . '.jpg';
        $catchphrase = $eventType . ('Story')->catchphrase;
        $title = 'Qualifications';
    } elseif ($eventType == 'sprint shootout') {
        $catchphrase = $eventType . ('Story')->catchphrase;
        $imagePath = 'Images/Stories/SprintShootouts/Main/' . $event->grandPrixWeekend->name . '.jpg';
        $title = 'Sprint Shootout';
    } elseif ($eventType == 'sprint') {
        $catchphrase = $eventType . ('Story')->catchphrase;
        $imagePath = 'Images/Stories/Sprints/Main/' . $event->grandPrixWeekend->name . '.jpg';
        $title = 'Sprint';
    } else {
        $catchphrase = $eventType . ('Story')->catchphrase;
        $imagePath = 'Images/Stories/Races/Main/' . $event->grandPrixWeekend->name . '.jpg';
        $title = 'Course';
    }

@endphp



<section id="News-Top3">
    <a href="{{ route($eventType . 'News', ['id' => $event->id]) }}" class="top-news">
        <h4 class="top-left">Nouvelle</h4>
        <img class="news-img" src="{{ asset($imagePath) }}" alt="">
        <div class="news-title">
            <h2>{{ $title }} {{ $event->grandPrixWeekend->country->name }}</h2>
            <h3>{{ $catchphrase }}</h3>
        </div>
    </a>

    <div class="top3">
        <h2>Top 3</h2>
        <div class="top3-drivers"->
            @for ($i = 0; $i < 3; $i++)
                @include('Home.Components.driver-card', ['position' => $i, 'driver' => $top3[$i]])
            @endfor
        </div>
    </div>
</section>


<style>


</style>
