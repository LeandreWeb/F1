@php
    $grandPrixName = $sprintShootoutStory->sprintShootout->grandPrixWeekend->name;

    $sprintShootout = $sprintShootoutStory->sprintShootout;
    $countryName = $sprintShootout->grandPrixWeekend->country->name;
@endphp


@extends('layouts.main')

@section('content')
    <main id="sprintShootout_story">
        {{-- Intro --}}
        <section class="intro">
            <div class="sprintShootout_intro">
                <h1>{{ $sprintShootoutStory->catchphrase }}</h1>
                <p>{{ $sprintShootoutStory->intro }}</p>
            </div>
            <img src="{{ asset('Images/Stories/SprintShootouts/Main/' . $grandPrixName . '.jpg') }}" alt="Main Photo">
        </section>

        <section class="q1 sprintShootout_content">
            <p>{{ $sprintShootoutStory->q1 }}</p>
            <div class="q1Out sprintShootout_outs">
                @foreach ($sprintShootout->q1out as $sprintShootoutresult)
                    <div class="q1_times sprintShootout_times">
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
                <h1 class="out_title">Q1 out</h1>
            </div>
            <h1 class="content_title">Q1</h1>
        </section>
        {{-- q2 --}}
        <section class="q2 sprintShootout_content">
            <div class="q2Out sprintShootout_outs">
                @foreach ($sprintShootout->q2out as $sprintShootoutresult)
                    <div class="q2_times sprintShootout_times">
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
                <h1 class="out_title out_q2">Q2 out</h1>
            </div>
            <p>{{ $sprintShootoutStory->q2 }}</p>
            <h1 class="content_title">Q2</h1>
        </section>
        {{-- q3 --}}
        <section class="q3 sprintShootout_content">
            <p>{{ $sprintShootoutStory->q3 }}</p>
            <div class="q3Out sprintShootout_outs">
                @foreach ($sprintShootout->q3results as $sprintShootoutresult)
                    <div class="q3_times sprintShootout_times">
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
                <h1 class="out_title out_q2">Q3 resultats</h1>
            </div>
            <h1 class="content_title">Q3</h1>
        </section>

        {{-- conclusion --}}
        <section class="sprintShootout_conclusion">
            <div class="conclusion_photo">
                <img src="{{ asset('Images/Stories/SprintShootouts/End/' . $grandPrixName . '.jpg') }}" alt="Photo Winner">
            </div>
            <p>{{ $sprintShootoutStory->conclusion }}</p>

            <a class="quali_link" href="{{ route('qualificationNews', ['id' => $sprintShootoutStory->id]) }}">Qualifications
                -></a>

            @if ($sprintShootout->grandPrixWeekend->sprint->sprint_story_id)
                <a class="sprint_link" href="{{ route('sprintNews', ['id' => $sprintShootoutStory->id]) }}">Sprint -></a>
            @endif
            @if ($sprintShootout->grandPrixWeekend->race->race_story_id)
                <a class="race_link" href="{{ route('raceNews', ['id' => $sprintShootoutStory->id]) }}">Course -></a>
            @endif
        </section>

        <section class="sprintShootout_visual">

            @include('svg.Qualifications.' . $countryName, [
                'time' => $sprintShootout->winner[0]->q3,
                'teamid' => $sprintShootout->winner[0]->driver->team->id,
            ])
            <div class="sprintShootout_visual--infos">
                <button class="start--animation">Démarrer</button>
                <h3>{{ $sprintShootout->winner[0]->q3 }} s</h3>
                <h3 class="driver_pole team_{{ $sprintShootout->winner[0]->driver->team->id }}--text">
                    {{ $sprintShootout->winner[0]->driver->FirstName }} {{ $sprintShootout->winner[0]->driver->Lastname }}
                </h3>
            </div>
        </section>




    </main>

    <style>
        #sprintShootout_story {
            display: flex;
            flex-direction: column;
            padding: 2em;
            gap: 1em;
        }

        .intro {
            display: flex;
            flex-wrap: wrap;
            min-height: calc(100vh - 138px);
        }

        .sprintShootout_intro {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 20px;
            gap: 20px;
            justify-content: center;
        }



        .sprintShootout_intro h1 {
            color: var(--accent);
            text-decoration: underline;
            text-decoration-color: var(--text);
            font-size: 96px;

        }

        #sprintShootout_story p {
            font-size: 24px;
        }

        .intro img {
            flex: 3;
            object-fit: cover;
            aspect-ratio: 16/9;
            min-width: 300px;
            padding: 2em;
            border-radius: 50px;
        }

        .sprintShootout_content {
            position: relative;
            display: flex;
            flex-wrap: wrap-reverse;
            padding: 64px 1em;
            gap: 1em;
            margin-top: 1em;
            align-items: center;
        }

        .sprintShootout_content p {
            flex: 2;
            min-width: 525px;
            padding: 1em
        }

        .sprintShootout_content img {
            width: 90%;
            height: 90%;

        }

        .middle_part {
            flex-direction: row-reverse;

        }

        .middle_part div {}

        .middle_part img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: inherit;

        }

        .sprintShootout_outs {
            background-color: #1E1E1E;
            display: flex;
            flex-direction: column
        }

        .sprintShootout_times {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sprintShootout_times:not(:last-child) {
            border-bottom: solid 2px var(--background-light)
        }

        .sprintShootout_outs {
            position: relative;
            padding: 45px 1.5em;
            flex: 1.25;
            border-radius: 15px;
            gap: 15px;
        }

        .out_title {
            position: absolute;
            left: 16px;
            top: -16px;
            font-size: 32px;
            color: var(--accent)
        }

        .content_title {
            position: absolute;
            left: 32px;
            top: -32px;
            font-size: 64px;
            color: var(--accent)
        }

        .sprintShootout_conclusion {
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

        .sprintShootout_conclusion p {
            padding: 0 2em;
        }

        .conclusion_photo img {
            width: 100%;
            max-width: 1500px;
            aspect-ratio: 16/9;
            object-fit: cover;
            border-radius: 15px;
            object-position: top;
        }

        .race_link {
            font-size: 24px;
            font-weight: 800;
            text-decoration: none;
            color: var(--accent);
            width: fit-content;
        }

        .race_link::after {
            display: block;
            content: "";
            width: 0%;
            height: 5px;
            background-color: var(--accent);
            transition: .5s
        }

        .race_link:hover::after {
            width: 100%;
        }

        .sprintShootout_visual {
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

        .sprintShootout_visual button {
            margin-top: 15px
        }

        .start--animation {
            color: #000000;
            font-size: 20px;
            font-weight: 600;
            padding: 20px;
            background-color: var(--accent);
            border: transparent;
            cursor: pointer;
            display: block;
            margin: auto;
            border-radius: 15px;
        }

        .start--animation:active {
            transform: translateY(3px)
        }

        .sprintShootout_visual--infos {
            background-color: #0F0F0F;
            align-self: stretch;
            border-radius: 0 0 10px 10px;
            padding: 0 15px 15px 15px;
            border-top: solid 2px var(--background-light)
        }


        @media screen and (max-width: 675px) {
          #sprintShootout p {
            font-size: 16px
          }
          .sprintShootout h1 {
            font-size:64px
          }

          .sprintShootout p  {
            min-width: auto;
          }

          .sprintShootout div{
            flex: auto;
            min-width: 200px;
          }
        }

        @media screen and (max-width: 450px) {

          .sprintShootout h1 {
            font-size:48px
          }




        }
    </style>
@endsection
