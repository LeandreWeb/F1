@switch($position)
    @case(0)
    <li class="driver_in_standing position--1">
      {{$driver->Lastname}}
    </li>
    

    @break

    @case(1)
    <li class="driver_in_standing position--2">
      {{$driver->Lastname}}
    </li>

    @break

    @case(2)
    <li class="driver_in_standing position--3">
      {{$driver->Lastname}}
    </li>

    @break

    @default
    <li class="driver_in_standing">
      {{$driver->Lastname}}
    </li>
@endswitch
