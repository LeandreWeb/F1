
<div class="driver-card team_{{$teamdriver->seasonTeam->team->id}}--border"">
    <div class="driver-info">
        <div class="driver-number team_{{$teamdriver->seasonTeam->team->id}}--text"># {{$teamdriver->driver->id}}</div>
        <div class="driver-fullname">
            <h4 class="driver-firstname">{{$teamdriver->driver->Firstname}}</h4>
            <h3 class= "driver-lastname team_{{$teamdriver->seasonTeam->team->id}}--text">{{$teamdriver->driver->Lastname}}</h3>
        </div>
    </div>
    <div class="driver-photo">
        <img src="{{asset('Images/Drivers/Side-profil/'.$teamdriver->driver->Lastname.".avif")}}" alt="">
        <img src="{{asset('Images/Teams/'.$teamdriver->seasonTeam->team->Name.' black.png')}}" class="driver-team" src="" alt="">
    </div>
</div>


<style>

    </style>
