@php
    $teamsCount = 1;
@endphp
@extends('layouts.main')



@section('content')
    <main>
        <h2 class="standing_Title">Classement</h2>
        <div class="year-selector">
            @include("Drivers.Components.selector",compact('seasons'))
        </div>
        <div class="standings">
            <ul class="standings--drivers">
                @include('Standing.Components.driver', compact('drivers'))
                <h3 id="standings--title">Pilotes</h3>
            </ul>
            <ul class="standings--teams">
                @include('Standing.Components.team', compact('teams'))
                <h3 id="standings--title">Équipes</h3>

            </ul>
        </div>

    </main>

    <style>
        .standing_Title {

            text-align: center;
            font-size: 5.6rem;
            margin-top: 1rem;
            -webkit-text-stroke: .1rem var(--accent);
            color: transparent;
        }

        .standings {
            margin: 5rem 0;
            display: flex;
            padding: 2rem;
            gap: 4rem;
            flex-wrap: wrap;
        }

        .standings h3 {
            font-size: 3.2rem;
        }

        .standings--drivers {
            flex: 2 0 45rem;
            ;


        }

        .standings--teams {
            flex: 1 0 45rem;

        }

        .standings ul {
            background-color: var(--background-light);
            border-radius: 1rem;
            padding: 3rem 0;
            height: fit-content;
            position: relative;
        }

        .position--1 {
            color: var(--gold)
        }

        .position--2 {
            color: var(--silver)
        }

        .position--3 {
            color: var(--bronze)
        }

        #standings--title {
            position: absolute;
            top: 0rem;
            left: 1rem;
            font-size: 6.4rem;
            color: var(--accent);
            transform: translateY(-50%)
        }

        @media screen and (max-width: 500px) {

            #standings--title {
                font-size: 3.2rem;
            }

            .standings h3 {
                font-size: 1.6rem;
            }

            .standings--drivers {
                flex-basis: auto
            }

            .standings--teams {
                flex-basis: auto
            }



        }

        @media screen and (max-height: 500px) {

            #standings--title {
                font-size: 3.2rem;
            }

            .standings h3 {
                font-size: 1.6rem;
            }

            .standings--drivers {
                flex-basis: auto
            }

            .standings--teams {
                flex-basis: auto
            }

        }
    </style>
@endsection
