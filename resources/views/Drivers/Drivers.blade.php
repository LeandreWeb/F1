@extends('layouts.main')

@section('content')
    <main class="in_construction">
        <h2 class="drivers_Title" >Pilotes</h2>
        <div class="year-selector">
            @include("Drivers.Components.selector",compact('seasons'))
        </div>
        <div class="drivers__container">
            @foreach ($teamDrivers as $teamdriver)
                @include('Drivers.Components.Driver', compact('teamdriver'))
            @endforeach
        </div>
    </main>

    <style>

        .drivers_Title {
            text-align: center;
            font-size: 5.6rem;
            margin-top: 1rem;
            -webkit-text-stroke: .1rem var(--accent);
            color: transparent;

        }
        .drivers__container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(45rem, 1fr));
            grid-row-gap: 8rem;
            grid-column-gap: 8rem;
            padding: 2rem;
            justify-items: center;
        }

        .driver-card {
            position: relative;
            background-color: var(--background-light);
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-radius: 2rem;
            overflow: hidden;
            animation: driverstilechange .5s ease-out both;


        }

        .driver-info {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex: 1;
            font-weight: 700;
            z-index: 1;
            animation: infotilechange .5s 1s ease-out both;

        }

        .driver-number {
            font-size: 4.8rem;
            font-weight: 900;
        }

        .driver-firstname {
            font-size: 2.4rem;
        }

        .driver-lastname {
            font-size: 3.2rem;
        }

        .driver-photo {
            display: flex;
            justify-content: flex-end;

        }

        .driver-photo img:last-child {
            object-fit: cover;
            animation: teamtilechange .5s .5s ease-out both;


        }

        .driver-photo img:first-child {
            background-color: transparent;
            z-index: 1;
            margin-bottom: -1rem;
        }

        .driver-team {
            position: absolute;
            height: 90%;
            object-fit: contain !important;
            top: 10%;
            aspect-ratio: 2/1;
            right: 0px;
            opacity: .4;
        }



        @media screen and (max-width: 500px) {


            .drivers__container {
                grid-template-columns: 1fr;
            }

            .driver-team {
                height: 50%;
            }

            .driver-photo img {
                aspect-ratio: 1/1;
                width: 12rem;
            }

        }

        @media screen and (max-width: 400px) {


            .driver-points{
              font-size: 2.4rem
            }
            .driver-lastname{
              font-size: 1.6rem
            }
            .driver-firstname{
              font-size: 1.2rem
            }
        }

        @keyframes driverstilechange{
            0%{
                
                opacity: 0;
                box-shadow: var(--card-shadow--begin);

            }


            50%{
                box-shadow: var(--card-shadow--begin);
            }

            100% {
                opacity:1;
            }
        }

        @keyframes teamtilechange{
            0%{
                
                opacity: 0;
                box-shadow: var(--card-shadow--begin);

            }


            50%{
                box-shadow: var(--card-shadow--begin);
            }

            100% {
                opacity:.4;
            }
        }

        @keyframes infotilechange{
            0%{
                transform: translateX(-15px);
                opacity: 0;

            }


            50%{

            }

            100% {
                transform: translateX(0px);
                opacity: 1;
            }
        }
    </style>
@endsection
