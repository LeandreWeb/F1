@extends('layouts.main')

@section('content')
    @include('Driver.Components.Presentation', compact('driver'))

    <style>
        .driver_presentation {
            width: 100%;
            height: 100dvh;
            position: relative;
            display: grid;
            padding: 5rem;
            place-items: center;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            box-shadow: 0px 0px 20px 20px var(--background) inset;

            @media (width < 1050px) {
                height: auto;

            }

            @media (width < 450px) {
                padding: 2rem;

            }
        }

        .blob {
            position: absolute;
            width: 100%;
            height: 100%;
            filter: url(#blur);

        }

        .shadow {
            position: absolute;
            width: 100%;
            height: 100%;
            box-shadow: 0px 0px 20px 20px var(--background) inset;

        }

        .driver_wrapper {

            place-self: center;
            max-width: 1200px;
            max-height: 600px;
            height: 100%;
            width: 100%;
            display: grid;
            grid-template-columns: repeat(2, auto) repeat(4, 1fr);
            grid-template-rows: repeat(4, auto) 200px 50px 50px;
            grid-column-gap: 30px;
            grid-row-gap: 20px;


            & .driver_box {

                border-radius: 15px;
                height: 100%;
                backdrop-filter: blur(20px);
                padding: 20px;
                /* background: linear-gradient(315deg, rgba(40,68,167,0.85) 0%, rgba(0,0,0,0.5) 100%);  */
                /* box-shadow: 0 1px 4px 0 #ffffff45 ;             */
                /* border-image: linear-gradient(-45deg,#2844a7, #ffffff) 30; */

            }

            & .driver_photo {
                grid-area: 1 / 1 / 6 / 3;
                display: grid;
                place-items: center;
                padding-bottom: 20px;

                & img {
                    width: 100%;
                    aspect-ratio: 250/300;
                    object-fit: cover;
                    background-color: #00000040;
                    border-radius: 5px;



                }

            }

            & .driver_name {
                grid-area: 6 / 1 / 8 / 3;


                & .driver_fullname {
                    display: flex;
                    flex-direction: column;
                    color: var(--text);
                    font-size: 3.2rem;
                }


            }

            & .driver_team {
                grid-area: 1 / 3 / 3 / 7;
                display: flex;
                padding: 10px;
                align-items: center;
                justify-content: center;
                gap: 5rem;

                & img {
                    height: 5rem;
                }

                & p {
                    font-size: 3.2rem;
                    font-weight: 500;
                }




            }

            & .driver_country {
                grid-area: 3 / 3 / 5 / 5;
                display: flex;
                padding: 10px;
                align-items: center;

                gap: 5rem;

                & img {
                    height: 7.5rem;
                }

                & p {
                    font-size: clamp(1rem, 1.5vw, 2.5rem);
                    font-weight: 500;
                }

                @media (width < 1200px) {
                    flex-direction: column;
                    gap: 1rem;
                    justify-content: center;
                }

            }

            & .driver_socials {
                grid-area: 3 / 5 / 5 / 7;
                display: flex;
                padding: 10px;

                flex-direction: column;
                justify-content: space-evenly;


                & a {
                    display: flex;
                    align-items: flex-end;
                    color: var(--text);
                    text-decoration: none;
                    font-size: clamp(1.4rem, 1.05vw, 2.4rem);
                    gap: 1rem;
                }

                & a:hover {
                    color: var(--accent);
                }
            }



            & .driver_text {
                grid-area: 5 / 3 / 8 / 7;
                overflow: auto;
                scrollbar-color: var(--accent) transparent;

                & p {
                    color: var(--text);
                    font-size: 1.8rem;

                }

            }

            @media (width < 1050px) {
                grid-template-columns: repeat(2, auto);
                grid-template-rows: repeat(4, auto);
                height: auto;
                max-height: none;

                & .driver_photo {
                    grid-area: 1 / 1 / 3 / 3;
                    justify-self: center;
                    width: 100%;

                    & img {
                        max-height: 40dvh;
                        width: auto;
                    }
                }

                & .driver_name {
                    grid-area: 3/1/4/2;
                    display: grid;

                    & .driver_fullname {
                        font-size: clamp(2rem, 2vw, 2.4rem);
                        display: flex;
                        justify-content: center;
                    }
                }


                & .driver_team {
                    grid-area: 4/1/5/3;

                    & img {
                        height: 2.5rem;
                    }
                }

                & .driver_country {
                    grid-area: 3/2/4/3;
                }

                & .driver_socials {
                    grid-area: 5/1/6/3;

                    & a {
                        display: flex;
                        align-items: flex-end;
                        color: var(--text);
                        text-decoration: none;
                        font-size: clamp(2rem, 2vw, 2.4rem);
                        gap: 1rem;
                    }
                }

                & .driver_text {
                    grid-area: 6/1/7/3;
                }



            }

        }
    </style>
@endsection
