@php
    \Carbon\Carbon::setLocale('fr');
    $date = \Carbon\Carbon::parse($nextRace->date);

    $formattedDate = $date->translatedFormat('j F ');

@endphp


<section id="next_race">
    <div class="next_race_container linear-box">
        <h4 class="top-left next_race_title">Prochain GP</h4>

        <div class="next-race-infos">
            <div class="next-race-infos-country">
                <h3>{{ $nextRace->grandPrixWeekend->country->name }} </h3>
                <h3>{{ $formattedDate }}</h3>
            </div>
            <h3 class="next-race-infos-round">
                Ronde {{ $nextRace->grandPrixWeekend->round }}
            </h3>
        </div>
        <div class="next-race-content">
            <div class="flag-container">
                <img class="flag"
                    src="{{ asset('Images/Flags/' . $nextRace->grandPrixWeekend->country->name . '.jpg') }}"
                    alt="">
            </div>

            <div class="track-card-container">
                <div class="track-card ">
                    <div class="track-container">
                        @include('svg.NextRace.' . $nextRace->grandPrixWeekend->track->name)
                    </div>
                    <div class="track-name">
                        {{ $nextRace->grandPrixWeekend->track->name }}
                    </div>
                </div>
            </div>


        </div>




    </div>

</section>


<style>
    #next_race {
        margin: 10em 0;
        display: flex;
        justify-content: center;
        padding: 2rem 8rem;

        @media screen and (max-width: 600px) {
            padding: 2rem 5rem;
        }

    }

    .next_race_container {
        display: flex;
        flex-direction: column;
        position: relative;
        border-radius: 20px;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 2em;
        padding: 2rem 4rem;
        box-shadow: var(--card-shadow);
        width: 100%;
        max-width: 1500px;

        @media screen and (max-width: 600px) {
            padding: 1rem;
        }
    }

    .track-container {
        height: 75%;
        width: 75%;


        & svg {
            height: 100%;
            width: 100%;

            @media screen and (max-width: 600px) {
                min-width: 5rem;
                ;

            }



        }

    }


    .next-race-infos {
        display: flex;
        margin: 20px;
        flex-wrap: wrap-reverse;
        justify-content: space-between;
        align-items: center;
        font-size: clamp(3.2rem, 4vw, 4.5rem);
        gap: 5rem;

        & .next-race-infos-country {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;

        }



    }

    .next-race-content {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;

        & .flag-container {
            object-fit: cover;
            padding: 2rem;
            flex: 1;
            min-width: 20rem;

            & .flag {
                width: 80%;
                aspect-ratio: 4/3;
                margin: auto;
            }

            @media screen and (max-width: 850px) {
                display: flex;
                flex: .5;
                margin: auto;

            }
        }

        & .track-card-container {
            flex: 2;
            padding: 2rem;
            display: flex;
            justify-content: flex-end;


            & .track-card {
                background-color: color-mix(in srgb, var(--background-light), transparent 100%);
                backdrop-filter: blur(100px);
                max-width: 60rem;
                width: 100%;
                padding: 2rem;
                border-radius: 15px;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                gap: 2rem;
                box-shadow: var(--card-shadow);
                min-width: 30rem;

                @media screen and (max-width: 850px) {
                    min-width: 10rem;

                }

                @media screen and (max-width: 600px) {
                    padding: 1rem;
                }



            }

            & .track-name {
                text-align: center;
                font-size: clamp(2.4rem, 3vw, 4.2rem);
                font-weight: 700;

                @media screen and (max-width: 600px) {
                    font-size: clamp(1.2rem, 2vw, 2.4rem);
                }



            }
        }
    }




    @media screen and (max-width: 1000px) {

        .next-race-infos {
            font-size: 2.4rem;
            gap: 1rem;
            margin: 1rem;
        }

        .next_race_time {
            font-size: 3.2rem;
        }

    }
</style>
