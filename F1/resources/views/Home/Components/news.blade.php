<section id="News-Top3">
    <a href="{{route('racenews',["id"=>$lastRace->id])}}" class="top-news" >
        <h4 class="top-left">Nouvelle</h4>
            <img class="news-img" src="{{asset('Images/Stories/News'.$lastRace->id.'.jpg')}}" alt="">
        <div class="news-title">
            <h2>GP {{$lastRace->grandPrixWeekend->country->name}}</h2>
            <h3>{{$lastRace->raceStory->catchphrase}}</h3>
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
