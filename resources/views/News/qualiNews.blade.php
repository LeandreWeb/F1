@php
    $quali = $qualiStory->qualification;
    $grandPrixName = $qualiStory->qualification->grandPrixWeekend->name;
    $countryName = $quali->grandPrixWeekend->country->name;
    $year = $qualiStory->qualification->grandPrixWeekend->season_id;

@endphp


@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <main id="quali_story" class="story">
        {{-- Intro --}}
        <section class="intro">
            <div class="intro_presentation">
                <h1>{{ $qualiStory->catchphrase }}</h1>
                <p>{{ $qualiStory->intro }}</p>
            </div>
            <img src="{{ asset('Images/Stories/' . $year . '/' . 'Qualifications/Main/' . $grandPrixName . '.jpg') }}"
                alt="Main Photo">
        </section>
        {{-- Q1 --}}
        <section class="q1 article_content">
            <div class="content-texts">
                <h3>Q1</h3>
                <p>{{ $qualiStory->q1 }}</p>
            </div>
            <div class="q1Out quali_outs">
                @foreach ($quali->q1out as $qualiresult)
                    <div class="q1_times quali_times">
                        <h3><span>
                                <h2>{{ $qualiresult->position }} </h2>
                            </span> {{ $qualiresult->driver->Lastname }} </h3>
                        @if ($qualiresult->q1)
                            @php
                                $minutes = floor($qualiresult->q1 / 60);
                                $seconds = fmod($qualiresult->q1, 60);
                                $millisecondsparts = explode('.', $qualiresult->q1);
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
                <h1 class="out_title">Q1 out</h1>
            </div>
        </section>
        {{-- q2 --}}
        <section class="q2 article_content">
            <div class="q2Out quali_outs">
                @foreach ($quali->q2out as $qualiresult)
                    <div class="q2_times quali_times">
                        <h3><span>
                                <h2>{{ $qualiresult->position }} </h2>
                            </span> {{ $qualiresult->driver->Lastname }} </h3>
                        @if ($qualiresult->q2)
                            @php
                                $minutes = floor($qualiresult->q2 / 60);
                                $seconds = fmod($qualiresult->q2, 60);
                                $millisecondsparts = explode('.', $qualiresult->q2);
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
                <h1 class="out_title out_q2">Q2 out</h1>
            </div>
            <div class="content-texts">
                <h3>Q2</h3>
                <p>{{ $qualiStory->q2 }}</p>
            </div>
        </section>
        {{-- q3 --}}
        <section class="q3 article_content">
            <div class="content-texts">
                <h3>Q3</h3>
                <p>{{ $qualiStory->q3 }}</p>
            </div>
            <div class="q3Out quali_outs">
                @foreach ($quali->q3results as $qualiresult)
                    <div class="q3_times quali_times">
                        <h3><span>
                                <h2>{{ $qualiresult->position }} </h2>
                            </span> {{ $qualiresult->driver->Lastname }} </h3>
                        @if ($qualiresult->q3)
                            @php
                                $minutes = floor($qualiresult->q3 / 60);
                                $seconds = fmod($qualiresult->q3, 60);
                                $millisecondsparts = explode('.', $qualiresult->q3);
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
                <h1 class="out_title out_q2">Q3 resultats</h1>
            </div>
        </section>

        {{-- conclusion --}}
        <section class="conclusion">
            <div class="conclusion_photo">
                <img src="{{ asset('Images/Stories/' . $year . '/' . 'Qualifications/End/' . $grandPrixName . '.jpg') }}"
                    alt="Photo Winner">
            </div>
            <h2>En Conclusion</h2>
            <p>{{ $qualiStory->conclusion }}</p>

        </section>

        <section class="pole_container">

            <div class="pole-infos">
                <h3 class="pole-driver team_{{ $quali->winner->driver->teamDriver[0]->seasonTeam->team->id }}--text">
                    {{ $quali->winner->driver->Firstname }} {{ $quali->winner->driver->Lastname }}
                </h3>
                @php
                    $minutes = floor($quali->winner->q3 / 60);
                    $seconds = fmod($quali->winner->q3, 60);
                    $millisecondsparts = explode('.', $quali->winner->q3);
                    $milliseconds = isset($millisecondsparts[1]) ? $millisecondsparts[1] : '';
                    $seconds = floor($seconds);
                    $time = sprintf('%d:%02d.%03d', $minutes, $seconds, $milliseconds);
                @endphp
                <h3 class="pole_time">{{ $time }}</h3>
                <button class="start--animation">Démarrer</button>
            </div>
            <div class="track_container">
                @include('svg.Qualifications.' . $quali->grandPrixWeekend->track->name, [
                    'time' => $quali->winner->q3,
                    'teamid' => $quali->winner->driver->teamDriver[0]->seasonTeam->team->id,
                ])
            </div>

        </section>

        @if ($qualiStory->extra)
            <section class="extra">
                <h2>Mise a Jour</h2>
                <p>{{ $qualiStory->extra }}</p>
            </section>
        @endif

        <section class="links">
            @if ($quali->grandPrixWeekend->race->race_story_id)
                <a class="race_link" href="{{ route('raceNews', ['id' => $qualiStory->id]) }}">Course -></a>
            @endif
        </section>





    </main>
@endsection
