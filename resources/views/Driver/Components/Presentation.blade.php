@php
    $team = $driver->currentTeam->seasonTeam->team;
@endphp

<section class="driver_presentation">
    @include('svg.Animated.misc.blob', ['id' => $team->id])
    <div class="shadow"></div>
    <div class="driver_wrapper driver_box team_{{ $team->id }}--boxes">
        <div class="driver_photo driver_box driver_box--topleft">
            <img src="{{ asset('Images/Drivers/Bust/2024/' . $driver->Lastname . '.png') }}" alt="">
        </div>
        <div class="driver_name driver_box driver_box--bottomleft">
            <div class="driver_fullname">
                <h3 class="driver_firstname">{{ $driver->Firstname }}</h3>
                <h3 class="driver_lastname">{{ $driver->Lastname }}</h3>
            </div>
        </div>
        <div class="driver_team driver_box driver_box--topright">
            <img src="{{ asset('Images/Teams/' . $team->Name . ' black.png') }}" alt="">
            <p>{{ $team->Name }}</p>

        </div>
        <div class="driver_country driver_box driver_box--center ">
            <img src="{{ asset('Images/Flags/' . $driver->country->name . '.jpg') }}" alt="">
            <p>{{ $driver->country->name }}</p>

        </div>
        <div class="driver_socials driver_box driver_box--right">
            <a href="{{$driver->socials->twitterLink}}" class="twitter ">
                <i class="fa-brands fa-x-twitter"></i>
                <p>{{$driver->socials->twitterName}}</p>
            </a>
            <a href="{{$driver->socials->instagramLink}}" class="instagram">
                <i class="fa-brands fa-instagram"></i>
                <p>{{$driver->socials->instagramName}}</p>
            </a>
            <a href="{{$driver->socials->websiteLink}}" class="website">
                <i class="fa-solid fa-globe"></i>
                <p>{{$driver->socials->websiteName}}</p>
            </a>
        </div>
        <div class="driver_text driver_box driver_box--bottomright">
            <p> {{$driver->socials->smallText}}</p>
        </div>
    </div>

</section>
