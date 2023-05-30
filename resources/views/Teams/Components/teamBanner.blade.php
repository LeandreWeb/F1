@php
    $drivers=$team->driver;
    $teampoints=0;
    foreach ($drivers as $driver) {
      $teampoints+=$driver->points;
    }
@endphp


<div class="team_container">
    <div class="team_infos">
        <div class="team_infos_name">
            <h3>{{ $team->Name }}</h3>
        </div>
        <div class="team_info_points">
          <h3>{{$teampoints}}</h3>
        </div>

    </div>
</div>
