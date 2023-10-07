@extends('layouts.main')

@section('content')
    <main class="schedule">
        <h2 class="schedule_Title">Calendrier</h2>
        <div class="schedule_container">
            @foreach ($GrandPrixWeekends as $gp)
                @include('Schedule.Components.event--' . $gp->status, compact('gp'))
            @endforeach
        </div>


        {{-- @include('.svg.CalendarTracks.Circuit International de Bahrain')
        @include('.svg.CalendarTracks.Circuit de la corniche de Djeddah')
        @include('.svg.CalendarTracks.Circuit parcs Albert')
        @include('.svg.CalendarTracks.Circuit ville de Baku')
        @include('.svg.CalendarTracks.Autodrome International de Miami')
        @include('.svg.CalendarTracks.Autodrome Enzo e Dino Ferrari')
        @include('.svg.CalendarTracks.Circuit de Monaco')
        @include('.svg.CalendarTracks.Circuit de Barcelona-Catalunya')
        @include('.svg.CalendarTracks.Circuit Gilles-Villeneuve')
        @include('.svg.CalendarTracks.Red Bull Ring')
        @include('.svg.CalendarTracks.Circuit de Silverstone')
        @include('.svg.CalendarTracks.Hungaroring')
        @include('.svg.CalendarTracks.Circuit de Spa-Francorchamps')
        @include('.svg.CalendarTracks.Circuit Zandvoort')
        @include('.svg.CalendarTracks.Autodrome National de Monza')
        @include('.svg.CalendarTracks.Circuit Rural de Marina Bay')
        @include('.svg.CalendarTracks.Circuit International de Suzuka')
        @include('.svg.CalendarTracks.Circuit International de Lusail')
        @include('.svg.CalendarTracks.Circuit des Amériques')
        @include('.svg.CalendarTracks.Autodrome Hermanos Rodriguez')
        @include('.svg.CalendarTracks.Autodrome José Carlos Pace')
        @include('.svg.CalendarTracks.Las Vegas')
        @include('.svg.CalendarTracks.Circuit Yas Marina') --}}



        {{-- Test pour Qualifications --}}
        {{-- @include('.svg.Qualifications.Circuit de Monaco') --}}


    </main>


    <style>
        .schedule_Title {
            text-align: center;
            font-size: 5.6rem;
            margin-top: 1rem;
            -webkit-text-stroke: .1rem var(--accent);
            color: transparent;

        }



        .schedule_container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-row-gap: 4rem;
            grid-column-gap: 2rem;
            padding: 2rem;
            justify-items: center;

        }

        .event_wrapper{
            padding: 4rem 0;
            grid-column: 1 / span 2;
            width: 100%;
            display: grid;
            place-items: center;
              }

        .event_container {
            border-radius: 1.5rem;
            background-color: var(--background-light);
            display: flex;
            max-width: 75rem;
            aspect-ratio: 2/1;
            padding: 1rem;
            position: relative;
            box-shadow: var(--card-shadow);

        }

        .event_container--incoming p {
            font-size: 2.4rem;
            color: var(--accent);
            text-align: end;
        }

        .event_container--current {

            max-width: none;
            width: 95%;
            aspect-ratio: 4/1;
            box-shadow: 0px 0px 30px -5px var(--confirmation);
        }

        .event_container--current p {
            font-weight: 800;
            text-align: end;
        }


        .event_track {
            flex: 1;
        }

        .event_track svg {
            width: 100%;
            height: 100%;
            padding: .5rem;
            min-width: 2.3rem;
        }

        .event_track svg #circuit {
            stroke-width: 20;
        }

        .event_track svg circle {
            r:20;
        }



        .event_infos {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 1rem;
            font-size: 3.2rem;
            gap: 2rem;

        }

        .event_info_title {
            font-size: 4rem;
            display: flex;
            align-items: flex-end;
            flex-direction: column;
            text-align: end;
        }

        .event_info_title_cancelled {
            font-size: 2.4rem;
            width: fit-content;
            padding: 1rem;
            margin-top: 1rem;
            border-radius: 1rem;
            color: var(--text);
            border: solid .2rem var(--danger);
            box-shadow: 0px 0px 20px -5px var(--danger);
        }

        .event_info_events {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .event_info_events a ,.article_to_do  {
            color: var(--accent);
            text-decoration: none;
            font-weight: 800;
            position: relative;
            overflow: hidden;
        }

        .article_to_do{
            opacity: .5;
            filter: blur(1px)
            
        } 

        .event_info_events a::after {
            content: "";
            background-color: var(--accent);
            width: 100%;
            height: .5rem;
            position: absolute;
            right: -100%;
            bottom: 0;
            transition: .2s
        }

        .event_info_events a:hover::after {
            right: 0rem;
        }

        .event_round {
            position: absolute;
            top: 0;
            left: 2rem;
            transform: translateY(-50%);
            color: var(--accent);
            font-size: 6.4rem;
        }

        .event_status {
            position: absolute;
            top: 0;
            right: 1rem;
            transform: translateY(-50%);
            color: var(--confirmation);
            font-size: 3.2rem;
        }

        @media screen and (max-width: 1325px) {
            .event_info_title {
                font-size: 2.6rem;
            }

            .event_round {
                font-size: 4rem;
            }

            .event_infos {
                font-size: 2.4rem;
            }

            .event_info_title_cancelled {
                font-size: 1.2rem
            }
        }

        @media screen and (max-width: 1090px) {
            .event_container {
                flex-direction: column;
                aspect-ratio: auto;
                width: 100%;
            }

            .event_container--current {
                aspect-ratio: 3/1;
                flex-direction: row;


            }
            .event_infos {
                font-size: 1.8rem;
            }
            @media screen and (max-width: 665px){
                .event_container--current {
                aspect-ratio: 2/1;
                flex-direction: row;
            }

            .event_infos {
                font-size: 1.6rem;
            }

            }

            @media screen and (max-width: 525px) {
                .event_container--current {
                    flex-direction: column;
                    aspect-ratio: auto;


                }

                .event_wrapper{
                    grid-column: 1;
                }

                .schedule_container {

                    grid-template-columns: 1fr;
                }
                .event_status{
                  font-size: 3vw;
                }

            }
        }
    </style>
@endsection
