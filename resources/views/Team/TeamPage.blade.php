@extends('layouts.main')

@section('content')
<main>
    @include('Team.Components.TeamPresentation',compact("team"))
</main>
<style>
    .team__presentation__container{
        width: 100%;
        height: 100vh;
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
</style>

@endsection
