
<a href="{{ route('driver',['id' => $teamdriver->driver->id])}}" class="driver-card team_{{$teamdriver->seasonTeam->team->id}}--border"">
    <div class="driver-info">
        <div class="driver-number team_{{$teamdriver->seasonTeam->team->id}}--text"># {{$teamdriver->driver->id}}</div>
        <div class="driver-fullname team_{{$teamdriver->seasonTeam->team->id}}--text">
            <h4 class="driver-firstname">{{$teamdriver->driver->Firstname}}</h4>
            <h3 class= "driver-lastname ">{{$teamdriver->driver->Lastname}}</h3>
        </div>
    </div>
    <div class="driver-photo">
        @if (file_exists(public_path(
                    'Images/Drivers/Side-profil/' .
                        $teamdriver->seasonteam->season_id .
                        '/' .
                        $teamdriver->driver->Lastname .
                        '.png')))
            <img src="{{ asset('Images/Drivers/Side-profil/' . $teamdriver->seasonteam->season_id . '/' . $teamdriver->driver->Lastname . '.png') }}"
                alt="">
        @else
            <img src="{{ asset('Images/Drivers/Side-profil/' . $teamdriver->seasonteam->season_id - 1 . '/' . $teamdriver->driver->Lastname . '.png') }}"
                alt="">
        @endif
        <img src="{{ asset('Images/Teams/' . $teamdriver->seasonTeam->team->Name . ' black.png') }}" class="driver-team"
            src="" alt="">
    </div>
</a>
