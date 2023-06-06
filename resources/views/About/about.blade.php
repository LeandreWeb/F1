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
                        le marcher du travail.</p>
                    <p>Voici mon site web The F1 Web Project , le but principale de se site a été d'apprendre Laravel et
                        PHP. J'ai fait la décision de faire se site a cause de ma passion de la F1 </p>
                    <p>J'ai été inspirer par des organisation tel que wtf1, P1 with Matt & Tommy et the Race. </p>
                    <p>Le site est loin d'être fii , mais je compte le faire évoluer petit a petit.</p>
                </div>
                <a class="about__portfolio" href="https://leandreweb.github.io/index.html">Portfolio</a>
                <div class="about__contacts__container">
                    <h3>Me contacter</h3>
                    <div class="about__contacts">
                        <div class="about__contact">
                            <h4>Email</h4>
                            <a id="mail" href="mailto:leandre.b.boislard@gmail.com">leandre.b.boislard<span>@</span>gmail.com</a>
                        </div>
                        <div class="about__contact">
                            <h4>Téléphone</h4>
                            <a id="phone" href="tel:(819)8068679"><span>(</span>819<span>)</span>806-8679</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="about__image">


            </div>
        </div>

    </main>

    <style>
        .about__container {
            display: flex;
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
            
            padding: 1rem;
        }

        .about__title{
          display: flex;
          flex-direction: column;

        }

        .about__texts{
          display: flex;
          flex-direction: column;
          gap: 2rem;
          margin: 3rem 0;
        }
        .about__infos .about__portfolio {
          color: var(--accent);
          margin: 3rem 0;
        }

        .about__contacts__container{
          margin: 3rem 0;

        }
        .about__contacts{
          display: flex;
          gap: 2rem;
          flex-wrap: wrap;
        }
        .about__contacts a {
          font-size: 2.4rem;
          text-decoration: underline var(--accent)
        }

        .about__contacts a:hover{
          color: var(--accent)
        }

        .about__contacts a:hover span{
          color: var(--text)
        }



        .about__image {
            flex: 1 0 0;
        }
    </style>
@endsection
