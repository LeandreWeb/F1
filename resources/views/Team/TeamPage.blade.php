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
        width: fit-content;
        height: fit-content;
        overflow: hidden;
    }
    .team__presentation__name{
        font-size: 25.6rem;
        transform: translateY(100%);
        animation: slideIn  1s ease-out .5s forwards;
    }

    .team__animated__logo{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        z-index: -1;
        animation: slideLeft 1s ease-in-out 4.5s forwards;
    }


    @keyframes slideIn {
        0%{
            transform: translateY(100%)
        }
        100%{
            transform: translateY(0%)
        }
    }
    @keyframes slideLeft{
        0%{
            left: 50%;
        }
        100%{
            left: 75%;
        }
    }
</style>

@endsection
