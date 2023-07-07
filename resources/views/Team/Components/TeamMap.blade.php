<section class="team__map--wrapper">
    <h2 class="team--title team_{{ $team->id }}--text">
        Base
    </h2>
    <div class="map__container">
        <div id='map'></div>
    </div>

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
    const marker = new mapboxgl.Marker({
            "color": "#68fe9a"
        })
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
        width: 90%;
        height: 30rem;
        border-radius: .4rem;
    }

    .team__map--wrapper {
        width: 100%;
        height: 50dvh;
        padding: 4rem;
        display: flex;
        flex-direction: column;
    }

    .map__container {
        display: flex;
        justify-content: center;
    }

    @media screen and (max-width: 530px) {
        .team__map--wrapper {
            height: 100dvh;
            scroll-snap-align: center;
            scroll-snap-stop: always;
        }

        .map__container {
            display: flex;
            height: 100%;
        }

        #map {
            width: 100%;
            height: 100%;
            border-radius: .4rem;
        }

    }
    @media screen and (max-height: 750px) {
        .team__map--wrapper {
            height: 100dvh;
        }

        .map__container {
            display: flex;
            height: 100%;
            scroll-snap-align: center;
            scroll-snap-stop: always;
        }

        #map {
            width: 100%;
            height: 100%;
            border-radius: .4rem;
        }

    }
</style>
