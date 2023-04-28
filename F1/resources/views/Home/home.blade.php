@extends('layouts.main')

@section('content')
<main>
@if ($qualification)
    @include('Home.Components.news',compact('top3','qualification'))

@else
    @include('Home.Components.news',compact('top3','lastRace'))

@endif

@include('Home.Components.next-race',compact('nextRace'))

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

