<section class="team__drivers__wrapper">
    <h2 class="team--title team_{{ $seasonTeam->team->id }}--text">
        Pilotes
    </h2>
    <div class="team__drivers__container">
        @foreach ($seasonTeam->teamDrivers as $teamdriver)
            @if ($teamdriver->status == 'active')
                <div class="team__driver__card__container ">
                    @if (file_exists(public_path(
                                'Images/Drivers/Side-profil/' .
                                    $teamdriver->seasonteam->season_id .
                                    '/' .
                                    $teamdriver->driver->Lastname .
                                    '.png')))
                        <img src="{{ asset('Images/Drivers/Side-profil/' . $teamdriver->seasonteam->season_id . '/' . $teamdriver->driver->Lastname . '.png') }}"
                            alt="" class="team__driver__photo">
                    @else
                        <img src="{{ asset('Images/Drivers/Side-profil/' . $teamdriver->seasonteam->season_id - 1 . '/' . $teamdriver->driver->Lastname . '.png') }}"
                            alt="" class="team__driver__photo">
                    @endif
                    <div class="team__driver__infos">
                        <div class="team__driver--firstname team__driver__info--container">Prénom: <span
                                class="team_{{ $seasonTeam->team->id }}--text">{{ $teamdriver->driver->Firstname }}</span>
                        </div>
                        <div class="team__driver--points team__driver__info--container">Points: <span
                                class="team_{{ $seasonTeam->team->id }}--text">{{ $teamdriver->points() }}</span></div>
                        <div class="team__driver--lastname team__driver__info--container">Nom de Famille: <span
                                class="team_{{ $seasonTeam->team->id }}--text">{{ $teamdriver->driver->Lastname }}</span>
                        </div>
                        <div class="team__driver--country team__driver__info--container">Pays: <span
                                class="team_{{ $seasonTeam->team->id }}--text">{{ $teamdriver->driver->country->name }}</span><span><img
                                    src="{{ asset('Images/Flags/' . $teamdriver->driver->country->name . '.jpg') }}"
                                    alt=""></span></div>
                        <div class="team__driver__infos--line team_{{ $seasonTeam->team->id }}--background"></div>
                    </div>
                    @if (file_exists(public_path('Images/Drivers/Number/' . $seasonTeam->season_id . $teamdriver->driver->Lastname . '.png')))
                        <img src="{{ asset('Images/Drivers/Number/' . $seasonTeam->season_id . $teamdriver->driver->Lastname . '.png') }}"
                            alt="" class="team__driver--number">
                    @else
                        <img src="{{ asset('Images/Drivers/Number/' . $seasonTeam->season_id - 1 . $teamdriver->driver->Lastname . '.png') }}"
                            alt="" class="team__driver--number">
                    @endif
                </div>
            @endif
        @endforeach
    </div>
</section>


<style>
    .team__drivers__wrapper {
        height: 100dvh;
        display: flex;
        flex-direction: column;
        padding: 0 4rem;
        justify-content: space-evenly;
        background-color: var(--background-dark);
        scroll-snap-align: center;
        scroll-snap-stop: always;


    }



    .team__drivers__container {
        display: flex;
        flex-direction: column;
        gap: 10rem;

    }

    .team__driver__card__container {
        flex: 1 0 auto;
        display: flex;
        justify-content: center;

    }



    .team__driver__photo {
        aspect-ratio: 1/1;
        align-self: flex-end;
        width: 25rem;

    }

    .team__driver__infos {
        padding: 0 1rem;
        align-self: flex-end;
        height: fit-content;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-row-gap: 2rem;
        flex: 0 0 80rem;
    }

    .team__driver__info--container {
        width: fit-content;
        height: fit-content;
        font-size: 3.2rem;
        overflow: hidden;
    }

    .team__driver__info--container span {
        display: inline-block;
        transform: translateY(100%);
        transition: .75s;
        font-weight: 800;
    }

    .team__driver__info--container span img {
        height: 2.5rem;
        margin-left: 1rem;

    }

    .visible_driver .team__driver__info--container span {
        transition-delay: .5s;
        transform: translateY(0%);

    }

    .team__driver__infos--line {
        height: .2rem;
        width: 0%;
        grid-column: 1 / span 2;
        transition: .75s;

    }

    .visible_driver .team__driver__infos--line {

        width: 100%;

    }

    .team__driver--number {
        aspect-ratio: 183/103;
        align-self: flex-end;
        width: 20rem;
    }

    @media screen and (max-width: 1225px) {
        .team__driver__info--container {
            font-size: 2.4rem;
        }

        .team__driver__infos {
            flex: 1 1 20rem;
        }

        .team__driver__photo {
            width: 20rem;
        }
    }

    @media screen and (max-width: 950px) {
        .team__driver__infos {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    }

    @media screen and (max-width: 775px) {
        .team__driver__info--container {
            font-size: 1.6rem;
        }

        .team__driver__photo {
            width: 15rem;
        }

        .team__driver--number {
            width: 10rem;
        }

        .team__driver__info--container span img {
            height: 1rem;
        }
    }

    @media screen and (max-width: 515px) {
        .team__driver__card__container {
            flex-direction: column;
            align-items: center;

        }

        .team__drivers__container {
            gap: 5rem;
        }

        .team__driver__photo,
        .team__driver--number,
        .team__driver__infos {
            align-self: initial;
        }

        .team__driver__infos {
            flex: 1 1 auto;
            border-top: solid black .2rem;
        }

        .team__driver--number {
            width: 5rem;
        }
    }

    @media screen and (max-height: 700px) {
        .team__driver__photo {
            width: 10rem;
        }

        .team__driver--number {
            width: 5rem;

        }

        .team__driver__info--container {
            font-size: 1.6rem;


        }

        .team__driver__infos {

            gap: 0.25rem;
            flex: auto auto auto;
        }

        .team__driver__info--container span img {
            height: 1rem;
        }

        .team__drivers__container {
            gap: 2rem;
        }
    }
</style>
