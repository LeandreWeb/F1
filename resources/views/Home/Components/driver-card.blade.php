<div class="driver-card driver-rank-{{$position + 1}}">
    <div class="driver-info">
        <div class="driver-points">{{ $teamDriver->points() }} Points</div>
        <div class="driver-fullname">
            <h4 class="driver-firstname">{{ $teamDriver->driver->Firstname }}</h4>
            <h3 class= "driver-lastname">{{ $teamDriver->driver->Lastname }}</h3>
        </div>
    </div>
    <div class="driver-photo">
        @if (file_exists(public_path(
                    'Images/Drivers/Side-profil/' .
                        $teamDriver->seasonteam->season_id .
                        '/' .
                        $teamDriver->driver->Lastname .
                        '.png')))
            <img src="{{ asset('Images/Drivers/Side-profil/' . $teamDriver->seasonteam->season_id . '/' . $teamDriver->driver->Lastname . '.png') }}"
                alt="">
        @else
            <img src="{{ asset('Images/Drivers/Side-profil/' . $teamDriver->seasonteam->season_id - 1 . '/' . $teamDriver->driver->Lastname . '.png') }}"
                alt="">
        @endif
        <h2 class="driver-position">{{ $position + 1 }}</h2>
        <img src="{{ asset('Images/Teams/' . $teamDriver->seasonTeam->team->Name . ' black.png') }}" class="driver-team"
            src="" alt="">
    </div>
</div>

<style>
    .driver-card {
        position: relative;
        background-color: var(--background-light);
        display: flex;
        justify-content: space-between;
        padding: 1rem;
        border-radius: 1.5rem;
        box-shadow: var(--card-shadow);
        width: 30rem;
        @media screen and (max-width: 650px) {
            width: 100%;
        }
    }

    .visible{
        & .driver-card{
            animation: slide-in-blurred-right .75s cubic-bezier(0.230, 1.000, 0.320, 1.000) both;
        }
        & .driver-rank-2{
            animation-delay: .15s;
        }
        & .driver-rank-3{
            animation-delay: .3s;
        }
        & .driver-rank-4{
            animation-delay: .45s;
        }
        & .driver-rank-5{
            animation-delay: .6s;
        }
    }


    .driver-info {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex: 1 1 auto;
        font-weight: 700;
        z-index: 1;
    }

    .driver-points {
        font-size: clamp(2rem, 1vw, 4.5rem);
    }

    .driver-firstname {
        font-size: clamp(2rem, 1vw, 4.5rem);
    }

    .driver-lastname {
        font-size: clamp(2rem, 1.25vw, 4.5rem);
    }

    .driver-photo {
        display: flex;
        justify-content: flex-end;
        flex: 0 0 40%;

        @media screen and (max-width: 365px) {
            flex: 0 0 30%;
        }

    }

    .driver-photo img {
        object-fit: contain;
        aspect-ratio: 1/1;

    }

    .driver-photo img:first-child {
        background-color: transparent;
        width: 100%;
        z-index: 1;
        margin-bottom: -1rem;
    }

    .driver-team {
        position: absolute;
        height: 80%;
        object-fit: contain !important;
        top: 10%;
        aspect-ratio: 2/1;
        right: 0px;
        opacity: .4;
    }

    .driver-position {
        position: absolute;
        top: 0px;
        right: 10px;
        font-size: clamp(2rem, 2vw, 3.5rem);
        font-weight: 800;
    }
</style>
