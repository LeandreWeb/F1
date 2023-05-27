@php
    $countryName = $article->grandPrixWeekend->country->name;
    $grandPrixName = $article->grandPrixWeekend->name;


@endphp

@extends('layouts.main')

@section('content')
    <main id="article_story">
        <section class="intro">
            <div class="article_intro">
                <h1>{{ $article->catchphrase }}</h1>
            </div>
            <img src="{{ asset('Images/Articles/' . $article->id . '.jpg') }}"" alt="">
        </section>





        <section class="article_text">
            <p>{{ $article->text}}</p>
        </section>






    </main>

    <style>
        #article_story {
            display: flex;
            flex-direction: column;
            padding: 1em;
        }

        .intro {
            display: flex;
            flex-wrap: wrap;
            min-height: calc(100vh - 138px);
        }

        .article_intro {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 20px;
            gap: 20px;
            justify-content: center;
        }



        .article_intro h1 {
            color: var(--accent);
            text-decoration: underline;
            text-decoration-color: var(--text);
            font-size: 100px;

        }

        #article_story p {
            font-size: 20px;
        }

        .intro img {
            flex: 3;
            object-fit: cover;
            aspect-ratio: 16/9;
            min-width: 300px;
            border-radius: 50px;
            box-shadow: var(--card-shadow);
        }

        .article_content {
            display: flex;
            flex-wrap: wrap-reverse;
            padding: 1em;
            gap: 1em;
            margin-top: 1em;
            align-items: center;
        }

        .article_content p {
            flex: 2;
            min-width: 525px;
            padding: 1em
        }

        .article_content div {
            flex: 1.25;
            min-width: 400px;
            background-color: rgba(0, 0, 0, 0.50);
            border-radius: 15px;
            display: grid;
            aspect-ratio: 16/9;
            place-items: center;
            align-self: stretch;


        }

        .article_content img {
            width: 100%;
            height: 100%;
            border-radius: inherit;

        }

        .last_part {
            flex-direction: row-reverse;

        }


        .middle_part img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: inherit;

        }

        .links {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .link {
            font-size: 25px;
            font-weight: 800;
            text-decoration: none;
            color: var(--accent);
            width: fit-content;
        }

        .link::after {
            display: block;
            content: "";
            width: 0%;
            height: 5px;
            background-color: var(--accent);
            transition: .5s
        }

        .link:hover::after {
            width: 100%;
        }

        .article_text {
            padding: 0 2em;
            display: flex;
            flex-direction: column;
            gap: 1em;
            margin: 5em 0
        }

        .conclusion_photo {
            display: grid;
            place-items: center;
            box-shadow: var(--card-shadow);
        }

        .article_text p {
            padding: 0 2em;
        }

        .conclusion_photo img {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            border-radius: 15px;
            max-width: 1500px;
            box-shadow: var(--card-shadow);
        }

        @media screen and (max-width: 675px) {
          #article_story p {
            font-size: 16px
          }
          .article_intro h1 {
            font-size:64px
          }

          .article_content p  {
            min-width: auto;
          }

          .article_content div{
            flex: auto;
            min-width: 200px;
          }
        }

        @media screen and (max-width: 450px) {

          .article_intro h1 {
            font-size:48px
          }




        }



    </style>
@endsection
