<section class="team__car--wrapper">
    <h2 class="team--title team_{{ $team->id }}--text">
        Voiture
    </h2>
    <div class="team__car--container">
        <div class="team__car--card">
            <h3 class="team__car--title">C43</h3>
            <img src="{{ asset('Images/Car/'.$team->Name.'.avif') }}" alt="">
        </div>
        <div class="team__car--infos">
            <h3>Moteur: <span>Ferrari</span></h3>
        </div>


    </div>

</section>

<style>
    .team__car--wrapper {
        width: 100%;
        height: 50dvh;
        padding: 4rem;
    }

    .team__car--container {
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    .team__car--card{
        display: flex;
        justify-content: center;
        position: relative;
    }
    .team__car--card img{
        margin-left: -7rem;
        height: 19.5rem;
        align-self: flex-end;
    }
    .team__car--title{
        font-size: 18.8rem;
        -webkit-text-stroke:.2rem var(--Alfa-Romeo);
        color: transparent;
        z-index: -1;
    }

    .team__car--infos{
        font-size: 2.4rem;
        color: var(--Alfa-Romeo)
    }

</style>
