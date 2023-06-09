@extends('layouts.main')

@section('content')
    <main>
        <div class="about__container">
            <div class="about__infos">
                <div class="about__title">
                    <h2>Bonjour</h2>
                    <h3>Mon nom est Léandre Bédard Boislard </h3>
                </div>
                <div class="about__texts">
                    <p>Je suis un développeur web a la recherche d'un emploi pour améliorer et transmettre mes connaissance
                        sur
                        le marché du travail.</p>
                    <p>Voici mon site web The F1 Web Project , le but principal de ce site a été d'apprendre Laravel et
                        PHP. J'ai décisidé de faire ce site a cause de ma passion de la F1 </p>
                    <p>J'ai été inspirer par des organisation tel que wtf1, P1 with Matt & Tommy et the Race. </p>
                    <p>Le site est loin d'être fini , mais je compte le faire évoluer petit a petit.</p>
                </div>
                <a class="about__portfolio" href="https://leandreweb.github.io/index.html">Portfolio</a>
                <div class="about__contacts__container">
                    <h3>Me contacter</h3>
                    <div class="about__contacts">
                        <div class="about__contact">
                            <h4>Email</h4>
                            <a id="mail"
                                href="mailto:leandre.b.boislard@gmail.com">leandre.b.boislard<span>@</span>gmail.com</a>
                        </div>
                        <div class="about__contact">
                            <h4>Téléphone</h4>
                            <a id="phone" href="tel:(819)8068679"><span>(</span>819<span>)</span>806-8679</a>
                        </div>
                    </div>
                    <a href="https://www.linkedin.com/in/l%C3%A9andre-b%C3%A9dard-boislard-11022b212/"><i
                            class="fa-brands fa-linkedin"></i></a>


                </div>
            </div>
            <div class="about__image">
                <div class="about__images__container">
                    <img src="{{ asset('Images/About/Selphie.png') }}" alt="">
                    <img src="{{ asset('Images/About/Decoration.svg') }}" alt="">
                </div>

            </div>
        </div>

    </main>

    <style>
        .about__container {
            display: flex;
            flex-wrap: wrap-reverse;

        }

        .about__container h2 {
            font-size: 9.6rem;
        }

        .about__container h3 {
            font-size: 3.6rem;
        }

        .about__container p {
            font-size: 2rem;
            font-weight: 400;
        }

        .about__container a {
            font-size: 3.6rem;
            text-decoration: none;
            color: var(--text);
            font-weight: 700;
        }

        .about__container h4 {
            font-size: 1.6rem;
        }


        .about__infos {
            flex: 1 0 0;

            padding: 1rem 1rem 1rem 5rem;
        }

        .about__title {
            display: flex;
            flex-direction: column;

        }

        .about__texts {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            margin: 3rem 0;
        }

        .about__infos .about__portfolio {
            color: var(--accent);
            margin: 3rem 0;

        }

        .about__portfolio::after {
            content: "";
            width: 0;
            transition: .5s;
            height: .25rem;
            background-color: var(--accent);
            display: block;
        }

        .about__portfolio:hover::after {
            width: 18rem;
        }




        .about__contacts__container {
            margin: 3rem 0;

        }
        .about__contacts__container i{
            margin-top: 1rem;
            font-size: 5rem;

        }

        .about__contacts__container i:hover{
            color: var(--accent)
        }

        .about__contacts__container i:active{
            transform: translateY(.25rem)
        }




        .about__contacts {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .about__contacts a {
            font-size: 2.4rem;
            text-decoration: underline var(--accent)
        }

        .about__contacts a:hover {
            color: var(--accent)
        }

        .about__contacts a:hover span {
            color: var(--text)
        }



        .about__image {
            flex: 1 0 55rem;

            display: flex;
            justify-content: center;

        }

        .about__images__container {
            height: 60rem;
            width: 60rem;
            position: relative;

            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .about__images__container:hover.about__images__container img:last-child {
            animation: rotate infinite .5s linear;
        }

        .about__image img {
            aspect-ratio: 1/1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }

        .about__image img:last-child {
            transform-origin: top left;
            animation: rotate 2 .5s linear;

        }

        @media screen and (max-width: 1050px) {
            .about__images__container {
                height: 30rem;
                width: 30rem;
            }

            .about__image img:first-child {
                height: 20rem;
            }

            .about__image img:last-child {
                height: 30rem;


            }
        }

        @media screen and (max-width: 600px) {
            .about__image {
                flex: 1 0 auto;
            }

            .about__container h2 {
                font-size: 4.6rem;
            }

            .about__container h3 {
                font-size: 1.8rem;
            }

            .about__container p {
                font-size: 1rem;
                font-weight: 400;
            }

            .about__container a {
                font-size: 1.8rem;
                text-decoration: none;
                color: var(--text);
                font-weight: 700;
            }

            .about__container h4 {
                font-size: .8rem;
            }

            .about__infos {

                padding: 1rem;
            }
        }

        @keyframes rotate {
            0% {
                rotate: 0deg;
            }

            50% {
                translate: 0-.5rem;
            }

            75% {
                translate: 0.5rem;
            }

            100% {
                rotate: 360deg;
                translate: 0 0rem;

            }
        }
    </style>
@endsection
