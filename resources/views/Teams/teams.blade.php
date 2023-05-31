@extends('layouts.main')

@section('content')
    <main class="teams">
        <h2 class="teams_title">Équipes</h2>
        <div class="teams_container">
            @foreach ($teams as $team)
                @include('Teams.Components.teamBanner', compact('team'))
            @endforeach
        </div>

    </main>

    <script src="{{ asset('js/teams.js') }}" defer></script>

    <style>
        .teams_container {
            padding: 5rem 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10rem;
        }


        .teams_title {
            text-align: center;
            font-size: 5.6rem;
            margin-top: 1rem;
            -webkit-text-stroke: .1rem var(--accent);
            color: transparent;
        }

        .team_container {
            display: flex;
            flex-direction: column;
            width: 80%;
            aspect-ratio: 5/1;
            justify-content: space-between;
            overflow: hidden;
            padding: 0 0 1rem 0;
            border-radius: 2rem;

        }

        .team_container:nth-child(even) {
            .team_infos {
                flex-direction: row-reverse;
            }

            .team_car {
                left: auto;
                right: -100%;

                & img {
                    transform: scaleX(-1);
                }
            }

            .team_lines {
                left: 60%;
            }

            .visible {
                .team_car {
                    left: auto;
                    right: 70%;

                }

            }

        }

        .team_infos {
            display: flex;
            justify-content: space-between;

            border-radius: 0 0 1rem 1rem;
            border: 0 0 1rem 0 solid var(--Ferarri)
        }

        .team_infos_name {
            font-size: 3.2rem;
            text-decoration: underline;
            padding: 1rem;
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .team_infos_name img {
            height: 6rem;

        }

        .team_info_points {
            font-size: 2.4rem;
            padding: 1rem;
            border-radius: 0 0 0 1rem;
            height: fit-content;
            width: fit-content;
        }


        .team_animation {
            position: relative;

            height: 10rem;
        }

        .team_car {
            position: absolute;
            left: -100%;
            transition: 1s;
            height: 100%;
        }

        .team_car img {
            height: 100%;
        }



        .team_lines {
            display: flex;
            flex-direction: column;
            width: 500%;
            height: 60%;
            position: absolute;
            right: 60%;
            top: 20%;
            z-index: -1;

            justify-content: space-around;

        }

        .team_line {
            height: 1.5rem;
            width: 100%;
        }

        .visible .team_car {
            left: 70%;
        }

        @media screen and (max-width: 950px) {
            .team_container {
                aspect-ratio: 3/1;
            }

            .visible .team_car {
                left: 40%;
            }

            .team_infos_name {
                font-size: 2.4rem;
            }

            .team_infos_name img {
                height: 4rem;

            }


            .team_container:nth-child(even) {


                .visible {
                    .team_car {
                        left: auto;
                        right: 40%;

                    }

                }

            }


        }

        @media screen and (max-width: 700px) {
            .team_container {
                aspect-ratio: 1.5/1;
            }

            .team_infos_name {
                flex-direction: column;
                align-items: flex-start;

            }

            .visible .team_car {
                left: 10%;
            }

            .team_infos_name {
                font-size: 2.4rem;
                gap: .5rem;
            }

            .team_infos_name img {
                height: 4rem;

            }

            .team_car img {
                height: 100%;
            }

            .team_container:nth-child(even) {

                .team_infos_name {
                    align-items: flex-end;
                    text-align: end;
                }

                .visible {
                    .team_car {
                        left: auto;
                        right: 10%;

                    }



                }

            }
        }
        @media screen and (max-width: 525px) {
          .team_container {
                aspect-ratio: 1/1;
            }

            .team_animation{
              height: 7rem;
            }
        }
    </style>
@endsection
