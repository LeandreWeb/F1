<section class="team__drivers__container">
    @foreach ($team->drivers as $driver )
        <div class="team__driver__card__container team_{{$team->id}}--border">
            <img src="{{asset('Images/Drivers/Side-profil/'.$driver->Lastname.'.avif')}}" alt="" class="team__driver__photo">
            <div class="team__driver__infos">
                <div class="team__driver--firstname team__driver__info--container">Prénom: <span>{{$driver->FirstName}}</span></div>
                <div class="team__driver--points team__driver__info--container">Points: <span>{{$driver->points}}</span></div>
                <div class="team__driver--lastname team__driver__info--container">Nom de Famille: <span>{{$driver->Lastname}}</span></div>
                <div class="team__driver--country team__driver__info--container">Pays: <span>{{$driver->country->name}}</span></div>


            </div>
        </div>

    @endforeach

</section>


<style>
    .team__drivers__container{
        height: 100vh;
        display: flex;
        flex-direction: column;
        padding: 0 4rem;
        justify-content: space-evenly;


    }
    .team__driver__card__container{

        display: flex;
        padding: 0 2rem;
        border-top: transparent;
        border-left: transparent;
        border-right: transparent;
        box-shadow: none;
    }
    .team__driver__card__container:hover ,.team__driver__card__container:active{
        box-shadow: none;

    }
    .team__driver__photo{
        aspect-ratio:1/1;
        align-self: center;
        height: 100%;
        max-height: 35rem;
    }
    .team__driver__infos{
        padding:0 1rem;
        align-self: flex-end;
        height: fit-content;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-row-gap: 1rem;
        grid-column-gap: 2rem;
    }

    .team__driver__info--container{
        width: fit-content;
        height: fit-content;
        font-size: 2.4rem;
        overflow: hidden;
    }
    .team__driver__info--container span{
        display: inline-block;
        transform: translateY(-100%);
    }

</style>
