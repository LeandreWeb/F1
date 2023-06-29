<section class="team__map--wrapper">
    <div id='map'></div>
</section>



<script>
    mapboxgl.accessToken =
        'pk.eyJ1IjoibGVhbmRyZWJiIiwiYSI6ImNsZThveXlkbjBocHQzeHIxZmpoOTBqMGIifQ.xRK99WKbAjKkTH2M9jZCpg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: <?php echo json_encode($team->factory->map_link, JSON_HEX_TAG); ?>,
        center: [
            <?php echo json_encode($team->factory->longitude, JSON_HEX_TAG); ?>,
            <?php echo json_encode($team->factory->lattitude, JSON_HEX_TAG); ?>
        ],
        zoom: 17
    });
    const marker = new mapboxgl.Marker({ "color": "#F91536" })
        .setLngLat([
            <?php echo json_encode($team->factory->longitude, JSON_HEX_TAG); ?>,
            <?php echo json_encode($team->factory->lattitude, JSON_HEX_TAG); ?>
        ])
        .addTo(map);
    map.on('load', () => {
        map.jumpTo({
            center: [<?php echo json_encode($team->factory->longitude, JSON_HEX_TAG); ?>,
            <?php echo json_encode($team->factory->lattitude, JSON_HEX_TAG); ?>
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
