@extends('layouts.main')

@section('content')
<main id="race_story">
    <section class="intro">
        <div class="race_intro">
            <h1>{{$raceStory->catchphrase}}</h1>
            <p>{{$raceStory->intro}}</p>
        </div>
        <img src="{{asset('Images/Stories/News'.$raceStory->id.'.jpg')}}"" alt="">
    </section>

    <section class="first_part race_content">
        <div>
            <img src="{{asset('Images/Pass/Firstpart/passAutralia.svg')}}" alt="">
        </div>
        <p>{{$raceStory->first_part}}</p>
    </section>

    <section class="middle_part race_content">
        <div></div>
        <p>{{$raceStory->middle_part}}</p>
    </section>

    <section class="last_part race_content">
        <div></div>
        <p>{{$raceStory->last_part}}</p>
    </section>

    <section class="race_conclusion">
        <p>{{$raceStory->conclusion}}</p>
    </section>


    
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

.race_content{
    display: flex;
    flex-wrap: wrap-reverse;
    padding: 1em;
    gap: 1em;
    margin-top: 1em;
}

.race_content  p {
    flex: 2;
    min-width: 525px;
}

.race_content div {
    flex: 1.25;
    min-width: 400px;
    background-color: rgba(0, 0, 0, 0.50);
    border-radius: 15px;
    display: grid;
    aspect-ratio:16/9;
    place-items: center;


}

.race_content img{
    width: 90%;
    height: 90%;
}

.middle_part{
    flex-direction:row-reverse;
}



    
</style>
    
@endsection


