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


@endsection
