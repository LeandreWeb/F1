@extends('layouts.main')

@section('content')
<main>

@isset ($article)
    @include('Home.Components.news',compact('top3',),['event'=>$article,"eventType"=>"article"])
@endif
@isset ($qualification)
    @include('Home.Components.news',compact('top3',),['event'=>$qualification,"eventType"=>"qualification"])
@endif
@isset($sprintShootout)
    @include('Home.Components.news',compact('top3','sprintShootout'),['event'=>$sprintShootout,"eventType"=>"sprint shootout"])
@endif
@isset ($sprint)
    @include('Home.Components.news',compact('top3','sprint'),['event'=>$sprint,"eventType"=>"sprint"])
@endif
@isset ($race)
    @include('Home.Components.news',compact('top3','race'),['event'=>$race,"eventType"=>"race"])
@endif

@empty($nextRace)
    @include('Home.Components.next-race__empty')
@else
    @include('Home.Components.next-race',compact('nextRace'))

@endif
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

