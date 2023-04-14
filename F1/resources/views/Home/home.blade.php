@extends('layouts.main')

@section('content')
<main>
@include('Home.Components.news',["top3"=>$top3,"lastRace"=>$lastRace])
@include('Home.Components.next-race',["nextRace"=>$nextRace])

</main>





{{-- <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.280/build/spline-viewer.js"></script>
<spline-viewer loading-anim url="https://prod.spline.design/7VlVJ9iqhhafGAtR/scene.splinecode"></spline-viewer>

<style>
    spline-viewer{
        width: 50%;
        aspect-ratio:16/9;
        margin: auto;


    }
</style> --}}
    {{-- <a href="{{route('allDrivers')}}">Drivers</a> --}}
@endsection

