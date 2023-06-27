<section class="team__map--wrapper">
    <div id='map'></div>
</section>



<script>
    mapboxgl.accessToken =
        'pk.eyJ1IjoibGVhbmRyZWJiIiwiYSI6ImNsZThveXlkbjBocHQzeHIxZmpoOTBqMGIifQ.xRK99WKbAjKkTH2M9jZCpg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/leandrebb/cljelhyf300av01p5cm7p76cv',
        center: [
            10.862881800444768,
            44.53224809926337
        ],
        zoom: 17
    });
    const marker = new mapboxgl.Marker({ "color": "#F91536" })
        .setLngLat([
            10.862881800444768,
            44.53224809926337
        ])
        .addTo(map);
    map.on('load', () => {
        map.jumpTo({
            center: [10.862881800444768,
                44.53224809926337
            ]
        });
    })
    map.on('idle', function() {
        map.resize()
    })
</script>
<style>
    #map {
        width: 90rem;
        height: 50rem;
        border-radius: .4rem
    }

    .team__map--wrapper {
        display: flex;
        justify-content: center;
        width: 100%;
        height: 100vh;
        padding: 2rem;
    }
</style>
