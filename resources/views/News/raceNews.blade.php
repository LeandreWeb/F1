@php
    $countryName = $raceStory->race->grandPrixWeekend->country->name;
    $grandPrixName = $raceStory->race->grandPrixWeekend->name;
    $race = $raceStory->race;
    $year = $raceStory->race->grandPrixWeekend->season_id;
@endphp

@extends('layouts.main')

@section('content')
    <main id="race_story">
        <section class="intro">
            <div class="race_intro">
                <h1>{{ $raceStory->catchphrase }}</h1>
                <p>{{ $raceStory->intro }}</p>
                <a class="quali_link" href="{{ route('qualificationNews', ['id' => $raceStory->id]) }}">Qualifications -></a>
            </div>
            <img src="{{ asset('Images/Stories/' . $year . '/' . 'Races/Main/' . $grandPrixName . '.jpg') }}"" alt="">
        </section>

        <section class="first_part race_content">
            <div class="race_content-photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Races/FirstPart/' . $grandPrixName . '.jpg') }}""
                    alt="">
            </div>
            <div class="race_content-texts">
                <h3>Départ</h3>
                <p>{{ $raceStory->first_part }}</p>
            </div>

        </section>

        <section class="middle_part race_content">
            <div class="race_content-photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Races/MiddlePart/' . $grandPrixName . '.jpg') }}""
                    alt="">
            </div>
            <div class="race_content-texts">
                <h3>Millieu</h3>
                <p>{{ $raceStory->middle_part }}</p>
            </div>

        </section>

        <section class="last_part race_content">
            <div class="race_content-photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Races/LastPart/' . $grandPrixName . '.jpg') }}""
                    alt="">
            </div>
            <div class="race_content-texts">
                <h3>Fin</h3>
                <p>{{ $raceStory->last_part }}</p>
            </div>

        </section>

        <section class="race_conclusion">
            <div class="conclusion_photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Races/End/' . $grandPrixName . '.jpg') }}""
                    alt="">
            </div>
            <h2>En Conclusion</h2>
            <p>{{ $raceStory->conclusion }}</p>
        </section>


        @if ($raceStory->extra)
            <section class="race_extra">
                <h2>Mise a Jour</h2>
                <p>{{ $raceStory->extra }}</p>
            </section>
        @endif

        <section class="links">
            @if ($race->grandPrixWeekend->sprint)
                <a class="race_link link" href="{{ route('sprintNews', ['id' => $raceStory->id]) }}">Sprint -></a>
            @endif
            @if ($race->grandPrixWeekend->sprintShootout)
                <a class="sprint_link link" href="{{ route('sprint shootoutNews', ['id' => $raceStory->id]) }}">Sprint
                    Shootout -></a>
            @endif
            @if ($race->grandPrixWeekend->qualification->qualification_story_id)
                <a class="race_link link" href="{{ route('qualificationNews', ['id' => $raceStory->id]) }}">Qualifications
                    -></a>
            @endif

        </section>


    </main>

    <style>
        #race_story {
            display: flex;
            flex-direction: column;
            padding: 1em;
        }

        .intro {
            display: flex;
            flex-wrap: wrap;
            min-height: calc(100vh - 138px);
            padding: 2rem;
            margin-bottom: 10rem;
        }

        .race_intro {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 20px;
            gap: 20px;
            justify-content: center;
        }



        .race_intro h1 {
            color: var(--accent);
            text-decoration: underline;
            text-decoration-color: var(--text);
            font-size: clamp(4.8rem, 5dvw, 9.6rem)
        }

        #race_story p {
            font-size: clamp(1.2rem, 1.5dvw, 2.4rem)
        }

        .intro img {
            flex: 3 0 75rem;
            object-fit: cover;
            aspect-ratio: 16/9;
            min-width: 300px;
            border-radius: 0.5rem;
            box-shadow: var(--card-shadow);
            max-width: 100%;
            max-height: 74.5rem;

        }

        .race_content {
            display: flex;
            flex-wrap: wrap-reverse;
            padding: 5rem;
            gap: 2rem;
            margin-top: 1em;
            align-items: center;
            min-height: 50dvh;
            margin-inline: auto;
            max-width: 175rem;
            justify-content: center;
            background-color: var(--background-light);

            @media screen and (max-width: 675px) {
                padding: 2.5rem;
            }
        }

        .race_content .race_content-texts {
            flex: 1 0 30rem;
            padding: 3.5rem;

            & h3 {
                font-size: clamp(2.4rem, 3.5dvw, 4.4rem);
                color: var(--accent);
            }

            @media screen and (max-width: 500px) {
                padding: 0;
            }
        }

        .race_content .race_content-photo {
            flex: 1 0 50rem;
            background-color: rgba(0, 0, 0, 0.50);
            border-radius: .5rem;
            aspect-ratio: 16/9;
            place-items: center;
            align-self: stretch;
            max-height: 100%;
            max-width: 100%;
            width: 100%;


            @media screen and (max-width: 1175px) {
                max-width: 75rem;
                flex: 1 1 auto;


            }



        }

        .race_content img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: inherit;
            box-shadow: var(--card-shadow);
            min-width: 25rem;
        }

        .middle_part {
            flex-direction: row-reverse;

        }




        .quali_link {
            font-size: 25px;
            font-weight: 800;
            text-decoration: none;
            color: var(--accent);
            width: fit-content;
        }

        .quali_link::after {
            display: block;
            content: "";
            width: 0%;
            height: 5px;
            background-color: var(--accent);
            transition: .5s
        }

        .quali_link:hover::after {
            width: 100%;
        }

        .race_conclusion {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            margin: 5em 0;
            margin-inline: auto;
            max-width: 150rem;
            padding: 5rem;
            background-color: var(--background-light);




            & h2 {
                text-decoration-color: var(--text);
                font-size: clamp(2.4rem, 5dvw, 4.8rem);
                color: var(--accent);

            }

            & .conclusion_photo {
                display: grid;
                place-items: center;

                & img {
                    width: 100%;
                    aspect-ratio: 16/9;
                    object-fit: cover;
                    border-radius: .5rem;
                    box-shadow: var(--card-shadow);
                }


            }
        }


        .race_extra {
            padding: 4rem;
            border: solid var(--attention) 2px;
            margin: 2rem;
            border-radius: 1rem;
            box-shadow: 0px 0px 1rem 0px var(--attention);
        }

        .race_extra h2 {
            font-size: 3.2rem;
            color: var(--attention);
        }



        .race_conclusion p {
            padding: 0 5rem;

            @media screen and (max-width: 500px) {
                padding: 0;
            }
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

        @media screen and (max-width: 675px) {

            .race_content p {
                min-width: auto;
            }

            .race_content div {
                flex: auto;
                min-width: 200px;
            }
        }
    </style>
@endsection
