<section class="team__infos--wrapper">
    <h2 class="team--title team_{{ $seasonTeam->team->id }}--text">
        Informations
    </h2>
    <div class="team__infos--container">
        <div class="team__infos__datas">
            <p class="team__infos__data">Points: <span
                    class="team_{{ $seasonTeam->team->id }}--text">{{ $seasonTeam->points() }}</span></p>
            <p class="team__infos__data">Chef-Équipe: <span
                    class="team_{{ $seasonTeam->team->id }}--text">{{ $seasonTeam->activeTeamPrincipal()->firstname }}
                    {{ $seasonTeam->activeTeamPrincipal()->Lastname }}</span></p>
            <p class="team__infos__data">Pays: <span
                    class="team_{{ $seasonTeam->team->id }}--text">{{ $seasonTeam->team->country->name }}<img
                        src="{{ asset('Images/Flags/' . $seasonTeam->team->country->name . '.jpg') }}"
                        alt=""></span></p>
        </div>
        <div class="team__text">
            {{ $seasonTeam->team->socials->smallText }}
        </div>
    </div>
    <div class="team__socials">
        <div class="team__social"><i class="fa-brands fa-x-twitter team_{{ $seasonTeam->team->id }}--text "></i><a
                class="team_{{ $seasonTeam->team->id }}--text "
                href="{{ $seasonTeam->team->socials->twitterLink }}">{{ $seasonTeam->team->socials->twitterName }}</a>
        </div>
        <div class="team__social"><i class="fa-brands fa-instagram team_{{ $seasonTeam->team->id }}--text"></i> <a
                href="{{ $seasonTeam->team->socials->instagramLink }}"
                class="team_{{ $seasonTeam->team->id }}--text ">{{ $seasonTeam->team->socials->instagramName }}</a>
        </div>
        <div class="team__social"><i class="fa-solid fa-globe team_{{ $seasonTeam->team->id }}--text"></i></i><a
                href="{{ $seasonTeam->team->socials->websiteLink }}"
                class="team_{{ $seasonTeam->team->id }}--text ">{{ $seasonTeam->team->socials->websiteName }}</a>
        </div>
    </div>


</section>

<style>
    .team__infos--wrapper {
        width: 100%;
        height: 100dvh;
        padding: 2rem 4rem 4rem 4rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-color: var(--background-darker);
        scroll-snap-align: center;
        scroll-snap-stop: always;


    }

    .team__infos--container {
        width: 100%;
        display: flex;
        place-items: center;
        flex-wrap: wrap;
        gap: 2rem;

    }

    .team__infos__datas {
        flex: 2 0 20rem;
    }

    .team__infos__data {
        font-size: 3.2rem;
    }

    .team__infos__data span {
        font-weight: 800;

    }

    .team__infos__data span img {
        height: 2.5rem;
        margin-left: 1rem;
    }

    .team__text {
        flex: 1 0 20rem;
        font-size: 2rem;

    }

    .team__socials {
        display: flex;
        flex-direction: row;
        justify-content: center;
        font-size: 2.4rem;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .team__social i {
        margin-right: 1rem;
        font-size: 3.2rem;
    }

    .team__social:hover i {
        animation: bounce 0.9s infinite both;
    }


    @media screen and (max-width: 475px) {


        .team__infos__data {
            font-size: 2.4rem;
        }

        .team__socials {
            font-size: 1.6rem;
        }

    }

    @media screen and (max-height: 700px) {
        .team__infos__data {
            font-size: 1.6rem;
        }

        .team__text {
            font-size: 1.2rem;
        }

        .team__socials {
            font-size: 1.2rem;
        }

        .team__socials i {
            font-size: 1.6rem;
        }
    }

    @keyframes bounce {
        0% {
            animation-timing-function: ease-in;
            opacity: 1;
        }

        24% {
            opacity: 1;
        }

        40% {
            transform: translateY(-8px);
            animation-timing-function: ease-in;
        }

        65% {
            transform: translateY(-8px);
            animation-timing-function: ease-in;
        }

        82% {
            transform: translateY(-3px);
            animation-timing-function: ease-in;
        }

        93% {
            transform: translateY(-2px);
            animation-timing-function: ease-in;
        }

        25%,
        55%,
        75%,
        87% {
            transform: translateY(0px);
            animation-timing-function: ease-out;
        }

        100% {
            transform: translateY(0px);
            animation-timing-function: ease-out;
            opacity: 1;
        }
    }
</style>
