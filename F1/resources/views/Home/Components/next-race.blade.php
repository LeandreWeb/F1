@php
    \Carbon\Carbon::setLocale('fr');
    $date= \Carbon\Carbon::parse($nextRace->date);

$formattedDate = $date->translatedFormat('j F ');


@endphp


<section id="next_race">
    <div class="next_race_container">
        <h4 class="top-left next_race_title">Prochain GP</h4>

        <div class="next-race-infos">
            <h3>{{$nextRace->grandPrixWeekend->country->name}}</h3>
            <h3 >{{$formattedDate}}</h3>
        </div>

        <img class="flag" src="{{asset('Images/Flags/'.$nextRace->grandPrixWeekend->country->name.'.jpg')}}" alt="">

        <div class="track-container">
            @include('svg.NextRace.'.$nextRace->grandPrixWeekend->country->name)
        </div>

        <h2 class="next_race_time"> Ronde {{$nextRace->grandPrixWeekend->id}}</h2>
    </div>

</section>


<style>
    #next_race{
        margin: 10em 0;
        display: flex;
        justify-content: center;
        padding:2em 3em;

    }

.next_race_container{
    background-image: linear-gradient(to top, var(--background-light), transparent);
    display: flex;
    flex-direction: column;
    position: relative;
    border-radius: 20px;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 2em;
    padding: 2em;
}

.next-race-infos{
display: flex;
gap:20px;
margin: 20px;
font-size: 48px;
flex-wrap: wrap;

}



.flag{
    aspect-ratio: 4/3;
    object-fit: cover;
    width: 150px;
    border-radius: 25px;
}

.next-infos{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    font-size: 48px;
    align-items: flex-end;
    font-weight:700;
    padding: 1em;
}



.next_race_time {
    font-size: 96px;
    text-align: center;

}



</style>
