@php
    $teamPoints = 0;
    foreach ($team->drivers as $driver) {
        $teamPoints += $driver->points;
    }

@endphp
<section class="team__infos--wrapper">
    <h2 class="team--title team_{{ $team->id }}--text">
        Informations
    </h2>
    <div class="team__infos--container">
        <div class="team__infos__datas">
            <p class="team__infos__data">Points: <span
                    class="team_{{ $driver->team->id }}--text">{{ $teamPoints }}</span></p>
            <p class="team__infos__data">Chef-Équipe: <span
                    class="team_{{ $driver->team->id }}--text">{{ $team->teamChief->firstname }}
                    {{ $team->teamChief->Lastname }}</span></p>
            <p class="team__infos__data">Pays: <span
                    class="team_{{ $driver->team->id }}--text">{{ $team->country->name }}<img
                        src="{{ asset('Images/Flags/' . $team->country->name . '.jpg') }}" alt=""></span></p>
        </div>
        <div class="team__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium placeat, doloremque sit hic veniam,
            consectetur voluptatum voluptate amet enim necessitatibus fugiat expedita. Veritatis at optio delectus esse
            magni quam quia.
            Eum, blanditiis est! Maxime sapiente nihil recusandae magnam ex cumque veniam commodi at libero ab harum
            voluptatem debitis inventore atque soluta, aspernatur quas aliquam sint tenetur perspiciatis voluptates
            ullam hic.
            Dicta commodi facilis corrupti distinctio accusamus amet dolore quo pariatur culpa rerum numquam voluptates,
            porro optio? Numquam, sint vitae! Saepe incidunt quam consequatur dignissimos soluta itaque voluptatibus,
            sequi recusandae asperiores!
        </div>
    </div>
    <div class="team__socials">
        <div class="team__social"><i class="fa-brands fa-twitter team_{{ $driver->team->id }}--text "></i>Twitter: <a
                href="#">{{ $team->Name }}</a></div>
        <div class="team__social"><i class="fa-brands fa-instagram team_{{ $driver->team->id }}--text"></i>Instagram: <a href="#">{{ $team->Name }}</a></div>
        <div class="team__social"><i class="fa-solid fa-globe team_{{ $driver->team->id }}--text"></i></i>Site-Web: <a href="#">{{ $team->Name }}</a></div>
    </div>


</section>

<style>
    .team__infos--wrapper {
        width: 100%;
        height: 100vh;
        padding: 2rem 4rem 4rem 4rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;

    }

    .team__infos--container {
        width: 100%;
        display: flex;
        place-items: center;
    }

    .team__infos__datas {
        flex: 1 0 20rem;
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
    }
    .team__social i {
      margin-right: 1rem;
      font-size: 3.2rem;
    }
</style>
