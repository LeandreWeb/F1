<section class="team__presentation__container team__presentation--{{$team->Name}}" id="presentation">
    <div class="team__presentation__name__container">
        <h2 class="team__presentation__name">{{$team->Name}}</h2>
    </div>
    {{-- <img loading="eager" class="team__animated__logo" src="{{ asset('Images/Teams/Animated/'.$team->Name.'.svg') }}" alt=""> --}}
    <div class="team__animated__logo">
        @include('svg.Animated.'.$team->Name)
    </div>

</section>

<style>
    .team__presentation__container{
        width: 100%;
        height: 100dvh;
        display: grid;
        place-items: center;
        position: relative;
        overflow: hidden;

    }
    .team__presentation__name__container{
        position: absolute;
        width: fit-content;
        height: fit-content;
        overflow: hidden;
        text-align: center;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        animation: slideLeft .75s ease-in-out 4.5s forwards;

    }
    .team__presentation__name{
        font-size: 12.8rem;
        transform: translateY(100%);
        animation: slideIn  .5s ease-out .5s forwards;

    }

    .team__animated__logo{
        position: absolute;
        left: 50%;
        top: 0;
        transform: translate(-50%,0);
        z-index: -1;
        animation: slideRigth .75s ease-in-out 4.5s forwards;
    }


    @keyframes slideIn {
        0%{
            transform: translateY(100%)
        }
        100%{
            transform: translateY(0%)
        }
    }
    @keyframes slideRigth{
        0%{
            left: 50%;
            top:0;
        }
        100%{
            left: 75%;
            top:50%;
            transform: translate(-50%,-50%);
        }
    }
    @keyframes slideLeft{

        to{
            left: 15%;
            transform: translate(0,-50%);

        }
    }

    @keyframes slideTop{
        to{
            top:15%;
            transform: translate(-50%,0);

        }

    }

    @keyframes slideDown{
        0%{
            left: 50%;
            top:0;
        }
        100%{
            left:50%;
            top:50%;
            transform: translate(-50%,10%);
        }
    }
     @media screen and (max-width: 1550px) {
        .team__presentation__name{
            font-size: 9.6rem;
        }
    }
    @media screen and (max-width: 1225px) {
        .team__presentation__name{
            font-size: 6.4rem;
        }
        .team__animated__logo{
            width: 40rem;
        }
    }
    @media screen and (max-width: 850px) {
        .team__presentation__name__container{
            animation: slideTop .75s ease-in-out 4.5s forwards;
        }
        .team__animated__logo{
            animation: slideDown .75s ease-in-out 4.5s forwards;

        }
    }
    @media screen and (max-height: 850px) {
        .team__animated__logo{
            width: 20rem;
        }
    }
</style>
