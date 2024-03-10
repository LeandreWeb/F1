@extends('layouts.main')

@section('content')
    <main>

        @isset($article)
            @include('Home.Components.news', compact('top5'), [
                'event' => $article,
                'eventType' => 'article',
            ])
            @endif
            @isset($qualification)
                @include('Home.Components.news', compact('top5'), [
                    'event' => $qualification,
                    'eventType' => 'qualification',
                ])
                @endif
                @isset($sprintShootout)
                    @include('Home.Components.news', compact('top5', 'sprintShootout'), [
                        'event' => $sprintShootout,
                        'eventType' => 'sprint shootout',
                    ])
                    @endif
                    @isset($sprint)
                        @include('Home.Components.news', compact('top5', 'sprint'), [
                            'event' => $sprint,
                            'eventType' => 'sprint',
                        ])
                        @endif
                        @isset($race)
                            @include('Home.Components.news', compact('top5', 'race'), [
                                'event' => $race,
                                'eventType' => 'race',
                            ])
                            @endif

                            @empty($nextRace)
                                @include('Home.Components.next-race__empty')
                            @else
                                @include('Home.Components.next-race', compact('nextRace'))

                                @endif
                            </main>
                        @endsection
