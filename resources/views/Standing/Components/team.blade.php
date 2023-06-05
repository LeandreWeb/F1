@php
    $position = 0;
@endphp
@foreach ($teams as $key => $team)

    <li class="standing__team position--{{$position+1}}">
      <div class="standing__team--infos">
          <h3 class="standing__team--position">{{$position+1}}</h3>
          <h3 class="standing__team--name">{{$team->Name}}</h3>
      </div>
      <h3 class="standing__team--points">
        {{$team->points}} pts
      </h3>
    </li>
    @php
        $position++;

    @endphp

@endforeach

<style>
    .standing__team{
        display: flex;
        justify-content: space-between;
        padding: .5rem 2rem;
        color: var(--text)
    }

    .standing__team:nth-child(even){
        background-color:var(--background-dark);
    }

    .standing__team--infos{
        display: flex;
        gap: 1rem;
    }
    .standing__team h3{
        font-size: 3.2rem;
    }
</style>
