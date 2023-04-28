@php
$quali= $qualiStory->qualification;
$countryName = $quali->grandPrixWeekend->country->name;
@endphp


@extends('layouts.main')

@section('content')
<main id="quali_story">
    {{-- Intro --}}
    <section class="intro">
        <div class="quali_intro">
            <h1>{{$qualiStory->catchphrase}}</h1>
            <p>{{$qualiStory->intro}}</p>



        </div>
        <img src="{{asset('Images/Stories/Qualifications/Main/'.$countryName.'.jpg')}}" alt="Main Photo">
    </section>
    {{-- Q1 --}}
    <section class="q1 quali_content">
        <p>{{$qualiStory->q1}}</p>
        <div class="q1Out quali_outs">
            @foreach ($quali->q1out as $qualiresult )
                <div class="q1_times quali_times">
                    <h3><span><h2>{{$qualiresult->position}} </h2></span> {{$qualiresult->driver->Lastname}} </h3>
                    @if ($qualiresult->q1)
                    @php
                    $minutes = floor($qualiresult->q1 / 60);
                    $seconds=fmod($qualiresult->q1,60);
                    $millisecondsparts = explode('.',$qualiresult->q1 );
                    $milliseconds = isset($millisecondsparts[1]) ? $millisecondsparts[1] : '';
                    $seconds = floor($seconds);
                    $time = sprintf('%d:%02d.%03d', $minutes, $seconds, $milliseconds);
                    @endphp


                    <h3> {{$time}}</h3>
                    @else
                        <h3>DNF</h3>
                    @endif
                </div>
            @endforeach
            <h1 class="out_title">Q1 out</h1>
        </div>
        <h1 class="content_title" >Q1</h1>
    </section>
    {{-- q2 --}}
    <section class="q2 quali_content">
        <div class="q2Out quali_outs">
            @foreach ($quali->q2out as $qualiresult )
                <div class="q2_times quali_times">
                    <h3><span><h2>{{$qualiresult->position}} </h2></span> {{$qualiresult->driver->Lastname}} </h3>
                    @if ($qualiresult->q2)

                    @php
                    $minutes = floor($qualiresult->q2 / 60);
                    $seconds=fmod($qualiresult->q2,60);
                    $millisecondsparts = explode('.',$qualiresult->q2 );
                    $milliseconds = isset($millisecondsparts[1]) ? $millisecondsparts[1] : '';
                    $seconds = floor($seconds);
                    $time = sprintf('%d:%02d.%03d', $minutes, $seconds, $milliseconds);
                    @endphp


                    <h3> {{$time}}</h3>
                    @else
                        <h3>DNF</h3>
                    @endif
                </div>
            @endforeach
            <h1 class="out_title out_q2">Q2 out</h1>
        </div>
        <p>{{$qualiStory->q2}}</p>
        <h1 class="content_title" >Q2</h1>
    </section>
    {{-- q3 --}}
    <section class="q3 quali_content">
        <p>{{$qualiStory->q3}}</p>
        <div class="q3Out quali_outs">
            @foreach ($quali->q3results as $qualiresult )
                <div class="q3_times quali_times">
                    <h3><span><h2>{{$qualiresult->position}} </h2></span> {{$qualiresult->driver->Lastname}} </h3>
                    @if ($qualiresult->q3)
                    @php
                    $minutes = floor($qualiresult->q3 / 60);
                    $seconds=fmod($qualiresult->q3,60);
                    $millisecondsparts = explode('.',$qualiresult->q3 );
                    $milliseconds = isset($millisecondsparts[1]) ? $millisecondsparts[1] : '';
                    $seconds = floor($seconds);
                    $time = sprintf('%d:%02d.%03d', $minutes, $seconds, $milliseconds);
                    @endphp


                    <h3> {{$time}}</h3>
                    @else
                        <h3>DNF</h3>
                    @endif
                </div>
            @endforeach
            <h1 class="out_title out_q2">Q3 resultats</h1>
        </div>
        <h1 class="content_title" >Q3</h1>
    </section>

    {{-- conclusion --}}
    <section class="quali_conclusion">
        <div class="conclusion_photo">
            <img src="{{asset('Images/Stories/Qualifications/End/'.$countryName.'.jpg')}}" alt="Photo Winner">
        </div>
        <p>{{$qualiStory->conclusion}}</p>

        @if ($quali->grandPrixWeekend->race->race_story_id)
        <a class="race_link" href="{{route('racenews',["id"=>$qualiStory->id])}}">Course -></a>
        @endif
    </section>

    <section class="quali_visual">

        @include('svg.Qualifications.'.$countryName,["time"=>$quali->winner[0]->q3,"teamid"=>$quali->winner[0]->driver->team->id])
        <div class="quali_visual--infos">
            <button class="start--animation">Démarrer</button>
            <h3>{{$quali->winner[0]->q3}} s</h3>
        <h3 class="driver_pole team_{{$quali->winner[0]->driver->team->id}}--text">{{$quali->winner[0]->driver->FirstName}} {{$quali->winner[0]->driver->Lastname}}</h3>
        </div>
    </section>




</main>

<style>

#quali_story{
    display: flex;
    flex-direction: column;
    padding: 2em;
    gap: 1em;
}

.intro{
    display: flex;
    flex-wrap: wrap;
    min-height: calc(100vh - 138px);
 }

.quali_intro{
    flex: 1;
    display: flex;
    flex-direction: column;
    padding: 20px;
    gap: 20px;
    justify-content: center;
}



.quali_intro h1{
    color: var(--accent);
    text-decoration: underline;
    text-decoration-color: var(--text);
    font-size: 100px;

}
#quali_story p{
    font-size: 25px;
}

.intro img{
        flex: 3;
        object-fit: cover;
        aspect-ratio:16/9;
        min-width: 300px;
        padding: 2em;
        border-radius: 50px;
}

.quali_content{
    position: relative;
    display: flex;
    flex-wrap: wrap-reverse;
    padding:64px 1em;
    gap: 1em;
    margin-top: 1em;
    align-items: center;
}

.quali_content  p {
    flex: 2;
    min-width: 525px;
    padding: 1em
}

.quali_content img{
    width: 90%;
    height: 90%;

}

.middle_part{
    flex-direction:row-reverse;

}

.middle_part div {

}

.middle_part img{
object-fit: cover;
width: 100%;
    height: 100%;
    border-radius:inherit;

}

.quali_outs{
    background-color: #1E1E1E;
    display: flex;
    flex-direction: column

}

.quali_times{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.quali_times:not(:last-child){
    border-bottom: solid 2px var(--background-light)

}

.quali_outs{
    position: relative;
    padding: 45px 1.5em;
    flex: 1.25;
    border-radius: 15px;
    gap: 15px;
}
.out_title{
    position: absolute;
    left: 16px;
    top: -16px;
    font-size: 32px;
    color: var(--accent)
}
.content_title{
    position: absolute;
    left: 32px;
    top: -32px;
    font-size: 64px;
    color: var(--accent)
}

.quali_conclusion{
    padding: 0 2em;
    display: flex;
    flex-direction: column;
    gap: 1em;
    margin: 5em 0
}

.conclusion_photo{
    display: grid;
    place-items: center;
}

.quali_conclusion p{
    padding: 0 2em;
}

.conclusion_photo img{
    width: 100%;
    max-width: 1500px;
    aspect-ratio:16/9;
    object-fit: cover;
    border-radius:15px;
    object-position: top;
}

.race_link{
    font-size: 25px;
    font-weight: 800;
    text-decoration: none;
    color: var(--accent);
    width: fit-content;
}

.race_link::after{
    display: block;
    content: "";
    width: 0%;
    height: 5px;
    background-color: var(--accent);
    transition: .5s
}

.race_link:hover::after{
    width: 100%;
}

.quali_visual{
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 32px;
    color: var(--accent);
    background-color: #1E1E1E;
    align-self: center;
    max-width: 1000px;
    width: 100%;


    border-radius: 15px;
}
.quali_visual button{
    margin-top: 15px
}

.start--animation{
    color: #000000;
    font-size:20px;
    font-weight: 600;
    padding: 20px;
    background-color: var(--accent);
    border: transparent;
    cursor: pointer;
    display: block;
    margin: auto;
    border-radius:15px;
}

.start--animation:active{
    transform: translateY(3px)
}

.quali_visual--infos {
    background-color:#0F0F0F;
    align-self: stretch;
    border-radius: 0 0 10px 10px;
    padding: 0 15px 15px 15px;
    border-top: solid 2px var(--background-light)
}


</style>

@endsection


