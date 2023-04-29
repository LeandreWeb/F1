@php
$imagePath;

$story= $eventType."Story";



if ($eventType=="qualification") {
    // $imagePath='Images/Stories/Qualifications/Main/'.$event->grandPrixWeekend->country->name.'.jpg';
}
else if ($eventType=="sprint shootout") {
    $story="sprintShootoutStory";
    
    $imagePath='Images/Stories/SprintShootouts/Main/'.$event->grandPrixWeekend->country->name.'.jpg';
}
else if ($eventType=="sprint") {
    // $imagePath='Images/Stories/Sprints/Main/'.$event->grandPrixWeekend->country->name.'.jpg';
}
else  {

    // $imagePath='Images/Stories/Races/Main/'.$event->grandPrixWeekend->country->name.'.jpg';
}


@endphp



<section id="News-Top3">
    <a href="{{route( $eventType.'News',["id"=>$event->id])}}" class="top-news" >
        <h4 class="top-left">Nouvelle</h4>
            <img class="news-img" src="{{asset($imagePath)}}" alt="">
        <div class="news-title">
            <h2>{{$eventType}} {{$event->grandPrixWeekend->country->name}}</h2>
            <h3>{{$event->$story->catchphrase}}</h3>
        </div>
    </a>

    <div class="top3">
        <h2>Top 3</h2>
        <div class="top3-drivers"->
        @for ($i = 0 ; $i < 3 ; $i++)
            @include('Home.Components.driver-card' ,['position'=>$i,"driver"=>$top3[$i]])
        @endfor
        </div>
    </div>
</section>
