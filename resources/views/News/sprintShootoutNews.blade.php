@php
    $grandPrixName = $sprintShootoutStory->sprintShootout->grandPrixWeekend->name;

    $sprintShootout = $sprintShootoutStory->sprintShootout;
    $countryName = $sprintShootout->grandPrixWeekend->country->name;
    $year = $sprintShootout->grandPrixWeekend->season_id;
@endphp


@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <main id="sprintShootout_story" class="story">
        {{-- Intro --}}
        <section class="intro">
            <div class="intro_presentation">
                <h1>{{ $sprintShootoutStory->catchphrase }}</h1>
                <p>{{ $sprintShootoutStory->intro }}</p>
            </div>
            <img src="{{ asset('Images/Stories/' . $year . '/' . 'SprintShootouts/Main/' . $grandPrixName . '.jpg') }}"
                alt="Main Photo">
        </section>
        {{-- SQ1 --}}
        <section class="q1 article_content">
            <div class="content-texts">
                <h3>SQ1</h3>
                <p>{{ $sprintShootoutStory->q1 }}</p>
            </div>
            <div class="q1Out quali_outs">
                @foreach ($sprintShootout->q1out as $sprintShootoutresult)
                    <div class="q1_times quali_times">
                        <h3><span>
                                <h2>{{ $sprintShootoutresult->position }} </h2>
                            </span> {{ $sprintShootoutresult->driver->Lastname }} </h3>
                        @if ($sprintShootoutresult->q1)
                            @php
                                $minutes = floor($sprintShootoutresult->q1 / 60);
                                $seconds = fmod($sprintShootoutresult->q1, 60);
                                $millisecondsparts = explode('.', $sprintShootoutresult->q1);
                                $milliseconds = isset($millisecondsparts[1]) ? $millisecondsparts[1] : '';
                                $seconds = floor($seconds);
                                $time = sprintf('%d:%02d.%03d', $minutes, $seconds, $milliseconds);
                            @endphp


                            <h3> {{ $time }}</h3>
                        @else
                            <h3>DNF</h3>
                        @endif
                    </div>
                @endforeach
                <h1 class="out_title">SQ1 out</h1>
            </div>
        </section>
        {{-- q2 --}}
        <section class="q2 article_content">
            <div class="q2Out quali_outs">
                @foreach ($sprintShootout->q2out as $sprintShootoutresult)
                    <div class="q2_times quali_times">
                        <h3><span>
                                <h2>{{ $sprintShootoutresult->position }} </h2>
                            </span> {{ $sprintShootoutresult->driver->Lastname }} </h3>
                        @if ($sprintShootoutresult->q2)
                            @php
                                $minutes = floor($sprintShootoutresult->q2 / 60);
                                $seconds = fmod($sprintShootoutresult->q2, 60);
                                $millisecondsparts = explode('.', $sprintShootoutresult->q2);
                                $milliseconds = isset($millisecondsparts[1]) ? $millisecondsparts[1] : '';
                                $seconds = floor($seconds);
                                $time = sprintf('%d:%02d.%03d', $minutes, $seconds, $milliseconds);
                            @endphp


                            <h3> {{ $time }}</h3>
                        @else
                            <h3>DNF</h3>
                        @endif
                    </div>
                @endforeach
                <h1 class="out_title out_q2">SQ2 out</h1>
            </div>
            <div class="content-texts">
                <h3>SQ2</h3>
                <p>{{ $sprintShootoutStory->q2 }}</p>
            </div>
        </section>
        {{-- q3 --}}
        <section class="q3 article_content">
            <div class="content-texts">
                <h3>SQ3</h3>
                <p>{{ $sprintShootoutStory->q3 }}</p>
            </div>
            <div class="q3Out quali_outs">
                @foreach ($sprintShootout->q3results as $sprintShootoutresult)
                    <div class="q3_times quali_times">
                        <h3><span>
                                <h2>{{ $sprintShootoutresult->position }} </h2>
                            </span> {{ $sprintShootoutresult->driver->Lastname }} </h3>
                        @if ($sprintShootoutresult->q3)
                            @php
                                $minutes = floor($sprintShootoutresult->q3 / 60);
                                $seconds = fmod($sprintShootoutresult->q3, 60);
                                $millisecondsparts = explode('.', $sprintShootoutresult->q3);
                                $milliseconds = isset($millisecondsparts[1]) ? $millisecondsparts[1] : '';
                                $seconds = floor($seconds);
                                $time = sprintf('%d:%02d.%03d', $minutes, $seconds, $milliseconds);
                            @endphp


                            <h3> {{ $time }}</h3>
                        @else
                            <h3>DNF</h3>
                        @endif
                    </div>
                @endforeach
                <h1 class="out_title out_q2">SQ3 resultats</h1>
            </div>
        </section>

        {{-- conclusion --}}
        <section class="conclusion">
            <div class="conclusion_photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'SprintShootouts/End/' . $grandPrixName . '.jpg') }}"
                    alt="Photo Winner">
            </div>
            <h2>En Conclusion</h2>
            <p>{{ $sprintShootoutStory->conclusion }}</p>


        </section>

        {{-- Visuel du gagnant --}}
        <section class="pole_container">
            
            <div class="pole-infos">
                <h3
                class="pole-driver team_{{ $sprintShootout->winner->driver->teamDriver[0]->seasonTeam->team->id }}--text">
                {{ $sprintShootout->winner->driver->Firstname }} {{ $sprintShootout->winner->driver->Lastname }}
            </h3>
            @php
                    $minutes = floor($sprintShootout->winner->q3 / 60);
                    $seconds = fmod($sprintShootout->winner->q3, 60);
                    $millisecondsparts = explode('.', $sprintShootout->winner->q3);
                    $milliseconds = isset($millisecondsparts[1]) ? $millisecondsparts[1] : '';
                    $seconds = floor($seconds);
                    $time = sprintf('%d:%02d.%03d', $minutes, $seconds, $milliseconds);
                    @endphp
                <h3 class="pole_time">{{ $time }}</h3>
                <button class="start--animation">Démarrer</button>
            </div>
            
            <div class="track_container">
                @include('svg.Qualifications.' . $sprintShootout->grandPrixWeekend->track->name, [
                    'time' => $sprintShootout->winner->q3,
                    'teamid' => $sprintShootout->winner->driver->teamDriver[0]->seasonTeam->team->id,
                    ])
            </div>
            
        </section>
        
        <section class="links">
            <a class="quali_link link"
                href="{{ route('qualificationNews', ['id' => $sprintShootoutStory->id]) }}">Qualifications
                -></a>

            @if ($sprintShootout->grandPrixWeekend->sprint->sprint_story_id)
                <a class="sprint_link link" href="{{ route('sprintNews', ['id' => $sprintShootoutStory->id]) }}">Sprint
                    -></a>
            @endif
            @if ($sprintShootout->grandPrixWeekend->race->race_story_id)
                <a class="race_link link" href="{{ route('raceNews', ['id' => $sprintShootoutStory->id]) }}">Course -></a>
            @endif
        </section>
        @if ($sprintShootoutStory->extra)
            <section class="extra">
                <h2>Mise a Jour</h2>
                <p>{{ $sprintShootoutStory->extra }}</p>
            </section>
        @endif
    </main>
@endsection
