@php
    $countryName = $sprintStory->sprint->grandPrixWeekend->country->name;
    $sprint = $sprintStory->sprint;
    $grandPrixName = $sprintStory->sprint->grandPrixWeekend->name;
    $year = $sprintStory->sprint->grandPrixWeekend->season_id;

@endphp

@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <main id="sprint_story" class="story">
        <section class="intro">
            <div class="intro_presentation">
                <h1>{{ $sprintStory->catchphrase }}</h1>
                <p>{{ $sprintStory->intro }}</p>
                <a class="quali_link link" href="{{ route('sprint shootoutNews', ['id' => $sprintStory->id]) }}">Sprint
                    Shootout
                    -></a>
            </div>
            <img src="{{ asset('Images/Stories/' . $year . '/' . 'Sprints/Main/' . $grandPrixName . '.jpg') }}""
                alt="">
        </section>

        <section class="first_part article_content">
            <div class="content-photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Sprints/FirstPart/' . $grandPrixName . '.jpg') }}"
                    alt="">
            </div>
            <div class="content-texts">
                <h3>Départ</h3>
                <p>{{ $sprintStory->first_part }}</p>
            </div>
        </section>

        <section class="last_part article_content quali_end">
            <div class="content-photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Sprints/LastPart/' . $grandPrixName . '.jpg') }}"
                    alt="">

            </div>
            <div class="content-texts">
                <h3>Fin</h3>
                <p>{{ $sprintStory->last_part }}</p>
            </div>
        </section>

        <section class="conclusion">
            <div class="conclusion_photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Sprints/End/' . $grandPrixName . '.jpg') }}""
                    alt="">
            </div>
            <h2>En Conclusion</h2>
            <p>{{ $sprintStory->conclusion }}</p>
        </section>

        @if ($sprintStory->update)
            <section class="sprint_update">

            </section>
        @endif

        <section class="links">
            @if ($sprint->grandPrixWeekend->sprintShootout->sprint_shootout_story_id)
                <a class="sprint_link link" href="{{ route('sprint shootoutNews', ['id' => $sprintStory->id]) }}">Sprint
                    Shootout -></a>
            @endif
            @if ($sprint->grandPrixWeekend->race->race_story_id)
                <a class="race_link link" href="{{ route('raceNews', ['id' => $sprintStory->id]) }}">Course -></a>
            @endif
            @if ($sprint->grandPrixWeekend->qualification->qualification_story_id)
                <a class="race_link link" href="{{ route('qualificationNews', ['id' => $sprintStory->id]) }}">Qualification
                    -></a>
            @endif

        </section>



    </main>

    <style>
        /* #sprint_story {
                display: flex;
                flex-direction: column;
                padding: 1em;
            }

            .intro {
                display: flex;
                flex-wrap: wrap;
                min-height: calc(100vh - 138px);
            }

            .intro_presentation {
                flex: 1;
                display: flex;
                flex-direction: column;
                padding: 20px;
                gap: 20px;
                justify-content: center;
            }



            .intro_presentation h1 {
                color: var(--accent);
                text-decoration: underline;
                text-decoration-color: var(--text);
                font-size: 100px;

            }

            #sprint_story p {
                font-size: 20px;
            }

            .intro img {
                flex: 3;
                object-fit: cover;
                aspect-ratio: 16/9;
                min-width: 300px;
                border-radius: 50px;
                box-shadow: var(--card-shadow);
            }

            .article_content {
                display: flex;
                flex-wrap: wrap-reverse;
                padding: 1em;
                gap: 1em;
                margin-top: 1em;
                align-items: center;
            }

            .article_content p {
                flex: 2;
                min-width: 525px;
                padding: 1em
            }

            .article_content div {
                flex: 1.25;
                min-width: 400px;
                background-color: rgba(0, 0, 0, 0.50);
                border-radius: 15px;
                display: grid;
                aspect-ratio: 16/9;
                place-items: center;
                align-self: stretch;


            }

            .article_content img {
                width: 100%;
                height: 100%;
                border-radius: inherit;
                box-shadow: var(--card-shadow);

            }

            .last_part {
                flex-direction: row-reverse;

            }


            .middle_part img {
                object-fit: cover;
                width: 100%;
                height: 100%;
                border-radius: inherit;

            }

            .links {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: flex-end;
                padding: 0 3rem
            }

            .link {
                font-size: 25px;
                font-weight: 800;
                text-decoration: none;
                color: var(--accent);
                width: fit-content;

            }

            .link::after {
                display: block;
                content: "";
                width: 0%;
                height: 5px;
                background-color: var(--accent);
                transition: .5s
            }

            .link:hover::after {
                width: 100%;
            }

            .conclusion {
                padding: 0 2em;
                display: flex;
                flex-direction: column;
                gap: 1em;
                margin: 5em 0
            }

            .conclusion_photo {
                display: grid;
                place-items: center;
            }

            .conclusion p {
                padding: 0 2em;
            }

            .conclusion_photo img {
                width: 100%;
                aspect-ratio: 16/9;
                object-fit: cover;
                border-radius: 15px;
                max-width: 1500px;
                box-shadow: var(--card-shadow);
            }

            @media screen and (max-width: 675px) {
                #sprint_story p {
                    font-size: 16px
                }

                .intro_presentation h1 {
                    font-size: 64px
                }

                .article_content p {
                    min-width: auto;
                }

                .article_content div {
                    flex: auto;
                    min-width: 200px;
                }
            }

            @media screen and (max-width: 450px) {

                .intro_presentation h1 {
                    font-size: 48px
                }




            } */
    </style>
@endsection
