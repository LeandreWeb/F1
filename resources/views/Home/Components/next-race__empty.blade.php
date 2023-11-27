
<section id="next_race">
    <div class="next_race_container">
        <h4 class="top-left next_race_title">Prochain GP</h4>


        <div class="track-container">
           <h2>La saison est terminer </h2>
           <h3>De retour en <span>2024</span></h3>
        </div>
    </div>

</section>


<style>
    #next_race {
        margin: 10em 0;
        display: flex;
        justify-content: center;
        padding: 2em 3em;

    }

    .next_race_container {
        background-image: linear-gradient(to top, var(--background-light), transparent);
        display: grid;
        place-items: center;
        position: relative;
        border-radius: 20px;
        padding: 2em;
        box-shadow: var(--card-shadow);
        min-height: 20em;
        min-width: 80%;
        text-align: center;

        & h2{
            font-size: 4.2rem;
        }

        & h3 {
            font-size: 3.2rem;
            & span{
                font-size: 4.2rem;
                -webkit-text-stroke: 0.1rem var(--accent);
                color: transparent;
            }

        }
    }

    @media screen and (max-width: 1000px) {
        
    }
</style>
