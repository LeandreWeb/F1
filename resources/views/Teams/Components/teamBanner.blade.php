
<a href="{{ route('team', ['teamName' => $seasonTeam->team->Name]) }}#presentation" class="team_container team_{{$seasonTeam->team->id}}--border">
    <div class="team_infos">
        <div class="team_infos_name">
            <img src="{{asset('Images/Teams/'.$seasonTeam->team->Name.' black.png')}}" alt="">
            <h3>{{ $seasonTeam->team->Name }}</h3>
        </div>
        <div class="team_info_points team_{{$seasonTeam->team->id}}--background">
            <h3>Pts :{{ $seasonTeam->points() }}</h3>
        </div>
    </div>
    <div class="team_animation">
        <div class="team_car">
            @if (file_exists(public_path('Images/Car/'.$seasonTeam->car->name.'.png')))
                <img src="{{ asset('Images/Car/'.$seasonTeam->car->name.'.png') }}" alt="">
            @else
                @include('svg.defaultCar',["team_id" => $seasonTeam->team->id])
            @endif
            <div class="team_lines">
                <div class="team_line team_{{$seasonTeam->team->id}}--background"></div>
                <div class="team_line team_{{$seasonTeam->team->id}}--background"></div>
                <div class="team_line team_{{$seasonTeam->team->id}}--background"></div>
            </div>
        </div>
    </div>

</a>
