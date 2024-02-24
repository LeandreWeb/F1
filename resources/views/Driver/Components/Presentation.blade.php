@php
    $team = $driver->currentTeam->seasonTeam->team;
@endphp

<section class="driver_presentation">
    @include("svg.Animated.misc.blob",["id" => $team->id])
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
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam maiores impedit amet fugiat minima eum
            possimus fugit. Nam quod nostrum vitae quibusdam voluptatem, enim magnam tempora, soluta illo doloremque
            adipisci.

        </div>
        <div class="driver_country driver_box driver_box--center ">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam maiores impedit amet fugiat minima eum
            possimus fugit. Nam quod nostrum vitae quibusdam voluptatem, enim magnam tempora, soluta illo doloremque
            adipisci.

        </div>
        <div class="driver_socials driver_box driver_box--right">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam maiores impedit amet fugiat minima eum
            possimus fugit. Nam quod nostrum vitae quibusdam voluptatem, enim magnam tempora, soluta illo doloremque
            adipisci.

        </div>
        <div class="driver_text driver_box driver_box--bottomright">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam maiores impedit amet fugiat minima eum
            possimus fugit. Nam quod nostrum vitae quibusdam voluptatem, enim magnam tempora, soluta illo doloremque
            adipisci.
        </div>
    </div>

</section>
