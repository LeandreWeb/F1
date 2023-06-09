@extends('layouts.main')
@section('content')
    <main class="page404__container">
          <div class="page404__wrapper">
            @include("svg.Errors.Logo404")
          <h2 class="page404__message">Cette page n'existe pas.</h2>
          <a href="{{ route('home') }}" >Page d'accueil</a>
        </div>

    </main>
<style>
  .page404__container{
    display:grid;
    place-items: center;
    height: 100%;
  }
  .page404__wrapper{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: auto;
    height: 100%;
  }
  .page404__message{
    margin-top:-10rem;
    font-size: 3.2rem;
  }

  .page404__container a{
    color: var(--background);
    background-color: var(--accent);
    text-decoration: none;
    border-radius: 1rem;
    font-size: 1.6rem;
    font-weight: 600;
    padding: 1.5rem 1rem;
    margin-top: 1rem;
    box-shadow: 0px 0px 10px -5px var(--accent);
    transition: box-shadow 0.3s ease-in-out;
  }
  .page404__container a:hover{
    background-color: var(--accent-darker);
    box-shadow: 0px 0px 20px -5px var(--accent-darker);

  }

  .page404__container a:active{
    transform: translateY(.15rem);
    box-shadow: 0px 0px 30px -5px var(--accent-darker);

  }

  @media screen and (max-width: 1000px){
    .page404__message{
    margin-top:-5rem;
    font-size: 3.2rem;
  }
  @media screen and (max-width: 500px){
    .page404__message{

    font-size: 2.4rem;
  }
}
}

</style>
@endsection
