@extends('layouts.main')

@section('content')
    <main class="teams">
        <h2 class="teams_title">Équipes</h2>
        <div class="teams_container">
            @foreach ($teams as $team)
                @include('Teams.Components.teamBanner', compact('team'))
            @endforeach
        </div>

    </main>

    <style>
        .teams_container{
          padding: 2rem;
          display: flex;
          flex-direction: column;
          align-items: center;
          gap: 2rem;
        }


        .teams_title {
            text-align: center;
            font-size: 5.6rem;
            margin-top: 1rem;
            -webkit-text-stroke: .1rem var(--accent);
            color: transparent;
        }
        .team_container{
          display: flex;
          flex-direction: column;
          border: .2rem solid red;
          width: 80%;
          aspect-ratio:4/1;
        }

        .team_infos{
          display: flex;
          justify-content: space-between;
        }
    </style>
@endsection
