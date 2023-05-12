<section class="nav-menu ">
    <div class="nav-container-hamburger">
        <a class="nav-menu-links" href="{{ route('home') }}">Menu</a>
        <a class="nav-menu-links" href="{{ route('teams') }}">Équipes</a>
        <a class="nav-menu-links" href="{{ route('standing') }}">Classement</a>
        <a class="nav-menu-links" href="{{ route('schedule') }}">Calendrier</a>
        <a class="nav-menu-links" href="{{ route('allDrivers') }}">Pilotes</a>

    </div>
</section>
<button class="hamburger">
    <div class="hamburger-main"></div>
</button>
<style>
    .nav-menu {
        position: fixed;
        width: 100%;
        height: 100vh;
        top: 0px;
        z-index: 2;
        scale: 0;
    }

    .nav-open {
        animation: open-nav .5s forwards;
    }

    .nav-closed {
        animation: close-nav .5s forwards;
    }

    .nav-container-hamburger {
        height: 100%;
        width: 100%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        padding: 1em;
        flex-direction: column;
        background-color: var(--background);

    }

    .nav-container-hamburger a {
        text-decoration: none;
        font-size: 96px;
        color: var(--text);
        position: relative;
        width: fit-content;
        transition: .5s;
    }

    .nav-container-hamburger a::after {
        position: absolute;
        content: "";
        background-color: var(--accent);
        width: 0%;
        height: 5px;
        left: 0px;
        bottom: 0px;
        transition: width 1s;

    }

    .nav-container-hamburger a:hover::after {
        width: 100%
    }


    .nav-open .nav-container-hamburger {


        animation: opacity .5s forwards;

    }

    .nav-closed .nav-container-hamburger {

        animation: opacityreverse .5s forwards;
    }

    /* animations */


    @keyframes opacity {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes opacityreverse {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    @keyframes close-nav {

        0%,
        99% {
            scale: 1;
        }

        100% {
            scale: 0;
        }


    }

    @keyframes open-nav {
        0% {
            scale: 0;
        }


        1%,
        100% {
            scale: 1;
        }
    }

    @media screen and (min-width: 801px) {
        .nav-open .nav-container-hamburger {
            animation: opacityreverse .5s forwards;
        }
    }


    @media screen and (max-width: 590px) {
        .nav-container-hamburger a {
            font-size: 64px
        }
    }

    @media screen and (max-width: 410px) {
        .nav-container-hamburger a {
            font-size: 32px
        }
    }
</style>
