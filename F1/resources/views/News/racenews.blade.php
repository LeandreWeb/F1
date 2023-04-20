@php
$countryName = $raceStory->race->grandPrixWeekend->country->name
@endphp

@extends('layouts.main')

@section('content')
<main id="race_story">
    <section class="intro">
        <div class="race_intro">
            <h1>{{$raceStory->catchphrase}}</h1>
            <p>{{$raceStory->intro}}</p>
            <a class="quali_link" href="{{route('qualinews',["id"=>$raceStory->id])}}">Qualifications -></a>
        </div>
        <img src="{{asset('Images/Stories/News'.$raceStory->id.'.jpg')}}"" alt="">
    </section>

    <section class="first_part race_content">
        <div>
            <img src="{{asset('Images/Pass/Firstpart/'.$countryName.'.svg')}}" alt="">
        </div>
        <p>{{$raceStory->first_part}}</p>
    </section>

    <section class="middle_part race_content">
        <div>
            <img src="{{asset('Images/Pass/MiddlePart/'.$countryName.'.jpg')}}" alt="">
        </div>
        <p>{{$raceStory->middle_part}}</p>
    </section>

    <section class="last_part race_content">
        <div>
            <img src="{{asset('Images/Pass/Lastpart/'.$countryName.'.svg')}}" alt="">

        </div>
        <p>{{$raceStory->last_part}}</p>
    </section>

    <section class="race_conclusion">
        <div class="conclusion_photo">
            <img src="{{asset('Images/Pass/Conclusion/'.$countryName.'.jpg')}}" alt="">
        </div>
        <p>{{$raceStory->conclusion}}</p>
    </section>

    @if ($raceStory->update)

    <section class="race_update">

    </section>

    @endif



</main>

<style>

#race_story{
    display: flex;
    flex-direction: column;
    padding: 1em;
}

.intro{
    display: flex;
    flex-wrap: wrap;
    min-height: calc(100vh - 138px);
 }

.race_intro{
    flex: 1;
    display: flex;
    flex-direction: column;
    padding: 20px;
    gap: 20px;
    justify-content: center;
}



.race_intro h1{
    color: var(--accent);
    text-decoration: underline;
    text-decoration-color: var(--text);
    font-size: 100px;

}
#race_story p{
    font-size: 20px;
}

.intro img{
        flex: 3;
        object-fit: cover;
        aspect-ratio:16/9;
        min-width: 300px;
        padding: 2em;
        border-radius: 50px;
}

.race_content{
    display: flex;
    flex-wrap: wrap-reverse;
    padding: 1em;
    gap: 1em;
    margin-top: 1em;
    align-items: center;
}

.race_content  p {
    flex: 2;
    min-width: 525px;
    padding: 1em
}

.race_content div {
    flex: 1.25;
    min-width: 400px;
    background-color: rgba(0, 0, 0, 0.50);
    border-radius: 15px;
    display: grid;
    aspect-ratio:16/9;
    place-items: center;
    align-self: stretch;


}

.race_content img{
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

.quali_link{
    font-size: 25px;
    font-weight: 800;
    text-decoration: none;
    color: var(--accent);
    width: fit-content;
}

.quali_link::after{
    display: block;
    content: "";
    width: 0%;
    height: 5px;
    background-color: var(--accent);
    transition: .5s
}

.quali_link:hover::after{
    width: 100%;
}

.race_conclusion{
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

.race_conclusion p{
    padding: 0 2em;
}

.conclusion_photo img{
    width: 100%;
    aspect-ratio:16/9;
    object-fit: cover;
    border-radius:15px;
    max-width: 1500px;
}

</style>

@endsection


