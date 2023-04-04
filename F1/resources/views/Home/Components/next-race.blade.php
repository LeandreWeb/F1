@php
    $date= \Carbon\Carbon::parse($nextRace->date);

$formattedDate = $date->format('j F ');


@endphp


<section id="next-race">
    <div class="next-race-container">
        <h4 class="top-left">Prochain GP</h4>
        <div class="racetrack">
            <div class="country">
                <h3>{{$nextRace->grandPrixWeekend->country->name}}</h3>
                <img src="{{asset('Images/Flags/'.$nextRace->grandPrixWeekend->country->name.'.jpg')}}" alt="">
                
            </div>
            <div class="track-container">
                @include('svg.'.$nextRace->grandPrixWeekend->country->name) 
                
            </div>
            
    
        </div>
        <div class="next-infos">
            <h3 >{{$formattedDate}}</h3>
            <h2 > Ronde {{$nextRace->grandPrixWeekend->id}}</h2>
        </div>
    </div>
    
</section>  


<style>
    #next-race{
        margin: 10em 0;
        display: flex;
        justify-content: center;
        padding:2em 3em;
        
    }

.next-race-container{
    background-image: linear-gradient(to top, var(--background-light), transparent);
    display: flex;
    position: relative;
    border-radius: 20px;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 2em;
}
.racetrack{
    padding: 1em
}

.country{
    display: flex;
    flex-direction: column;
    width: fit-content;
    font-size: 48px;
}

.country img{
    aspect-ratio: 4/3;
    object-fit: cover;
    width: 3em;
    border-radius: 25px;
}

.next-infos{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    font-size: 40px;
    align-items: flex-end;
    font-weight:700;
    padding: 1em;
}

.next-infos h2{
    font-size: 80px;
    
}



</style>