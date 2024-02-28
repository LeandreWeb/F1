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
                aspect-ratio: 250/300;

                & img {
                    width: 100%;
                    height: 100%;
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
                    color: black;
                    text-align: center;
                    font-size: 30px;
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
                    font-size: 2.4rem;
                    font-weight: 500;
                }



            }

            & .driver_socials {
                grid-area: 3 / 5 / 5 / 7;
                display: flex;
                padding: 10px;
                flex-direction: column;
                justify-content: space-evenly;

                & i {

                    font-size: 2.5rem;
                }




            }

            & .driver_text {
                grid-area: 5 / 3 / 8 / 7;

                & p {
                    font-size: 2rem;
                }



            }

        }
    </style>
@endsection
