
<div class="driver-card team_{{$driver->team->id}}--border"">
    <div class="driver-info">
        <div class="driver-number team_{{$driver->team->id}}--text"># {{$driver->id}}</div>
        <div class="driver-fullname">
            <h4 class="driver-firstname">{{$driver->Firstname}}</h4>
            <h3 class= "driver-lastname team_{{$driver->team->id}}--text">{{$driver->Lastname}}</h3>
        </div>
    </div>
    <div class="driver-photo">
        <img src="{{asset('Images/Drivers/Side-profil/'.$driver->Lastname.".avif")}}" alt="">
        <img src="{{asset('Images/Teams/'.$driver->team->Name.' black.png')}}" class="driver-team" src="" alt="">
    </div>
</div>


<style>

    </style>
