@php
    $countryName = $raceStory->race->grandPrixWeekend->country->name;
    $grandPrixName = $raceStory->race->grandPrixWeekend->name;
    $race = $raceStory->race;
    $year = $raceStory->race->grandPrixWeekend->season_id;
@endphp

@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <main id="race_story" class="story">
        <section class="intro">
            <div class="intro_presentation">
                <h1>{{ $raceStory->catchphrase }}</h1>
                <p>{{ $raceStory->intro }}</p>
                <a class="quali_link" href="{{ route('qualificationNews', ['id' => $raceStory->id]) }}">Qualifications -></a>
            </div>
            <img src="{{ asset('Images/Stories/' . $year . '/' . 'Races/Main/' . $grandPrixName . '.jpg') }}"" alt="">
        </section>

        <section class="first_part article_content">
            <div class="content-photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Races/FirstPart/' . $grandPrixName . '.jpg') }}""
                    alt="">
            </div>
            <div class="content-texts">
                <h3>Départ</h3>
                <p>{{ $raceStory->first_part }}</p>
            </div>

        </section>

        <section class="middle_part article_content">
            <div class="content-photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Races/MiddlePart/' . $grandPrixName . '.jpg') }}""
                    alt="">
            </div>
            <div class="content-texts">
                <h3>Millieu</h3>
                <p>{{ $raceStory->middle_part }}</p>
            </div>

        </section>

        <section class="last_part article_content">
            <div class="content-photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Races/LastPart/' . $grandPrixName . '.jpg') }}""
                    alt="">
            </div>
            <div class="content-texts">
                <h3>Fin</h3>
                <p>{{ $raceStory->last_part }}</p>
            </div>

        </section>

        <section class="conclusion">
            <div class="conclusion_photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Races/End/' . $grandPrixName . '.jpg') }}""
                    alt="">
            </div>
            <h2>En Conclusion</h2>
            <p>{{ $raceStory->conclusion }}</p>
        </section>


        @if ($raceStory->extra)
            <section class="extra">
                <h2>Mise a Jour</h2>
                <p>{{ $raceStory->extra }}</p>
            </section>
        @endif

        <section class="links-wrapper">
            <div class="links-container">
                <p>Liens GP</p>

                <div class="links">
                    @if ($race->grandPrixWeekend->sprintShootout)
                        <a class="sprint_link link" href="{{ route('sprint shootoutNews', ['id' => $raceStory->id]) }}">
                            @include('Links.sprintShootout')
                        </a>
                    @endif
                    @if ($race->grandPrixWeekend->sprint)
                        <a class="race_link link" href="{{ route('sprintNews', ['id' => $raceStory->id]) }}">
                            @include('Links.sprint')
                        </a>
                    @endif
                    @if ($race->grandPrixWeekend->qualification->qualification_story_id)
                        <a class="race_link link" href="{{ route('qualificationNews', ['id' => $raceStory->id]) }}">
                            @include('Links.quali')
                        </a>
                    @endif

                </div>
            </div>
        </section>



    </main>
@endsection
