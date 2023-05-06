<svg  viewBox="0 0 853 443" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="svg autralia">
    <path id="Autralie" d="M336.391 423.529L494.391 420.529C540.891 416.029 668.891 419.713 686.76 408.029C699.76 399.529 684.021 348.529 695.891 346.029C718.397 341.289 777.391 366.778 789.76 364.029C807.76 360.029 824 294.5 843 264C827.24 243.971 732.391 191.529 698.391 184.529C679.391 180.617 604.891 189.529 568.76 193.529C558.891 202.529 546.891 223.529 536.391 234.029C354.891 265.029 338.891 179.029 299.391 105.029C278.191 54.2291 212.391 11.5291 174.26 8.0291C145.384 7.3233 119.264 19.4945 100.764 40.4946C89.3117 53.4944 53.2638 43.4944 48.2638 64.4947C39.2057 102.539 21.1675 125.756 13.7601 166.029C-2.60934 255.029 15.7638 229.995 70.7634 286.995C87.2634 308.995 29.2638 339.495 53.2638 351.995C86.8943 374.995 201.764 380.995 280.764 375.995C338.764 388.495 313.021 423.529 336.391 423.529Z" stroke="black" stroke-width="15"/>
    <path id="start line" d="M477 400L476.5 442.5" stroke="white" stroke-width="7"/>
    <circle class="driver_circle pause team_{{$teamid}}--fill" r="12"/>
</g>
<style>

svg{
    padding: 25px;
}
.driver_circle{
position:absolute;
offset-distance: 0%;
    aspect-ratio:1/1;
    width: 25px;
    z-index: 1;
    offset-path: path("M336.391 423.529L494.391 420.529C540.891 416.029 668.891 419.713 686.76 408.029C699.76 399.529 684.021 348.529 695.891 346.029C718.397 341.289 777.391 366.778 789.76 364.029C807.76 360.029 824 294.5 843 264C827.24 243.971 732.391 191.529 698.391 184.529C679.391 180.617 604.891 189.529 568.76 193.529C558.891 202.529 546.891 223.529 536.391 234.029C354.891 265.029 338.891 179.029 299.391 105.029C278.191 54.2291 212.391 11.5291 174.26 8.0291C145.384 7.3233 119.264 19.4945 100.764 40.4946C89.3117 53.4944 53.2638 43.4944 48.2638 64.4947C39.2057 102.539 21.1675 125.756 13.7601 166.029C-2.60934 255.029 15.7638 229.995 70.7634 286.995C87.2634 308.995 29.2638 339.495 53.2638 351.995C86.8943 374.995 201.764 380.995 280.764 375.995C338.764 388.495 313.021 423.529 336.391 423.529Z");
    animation: followpathmax {{$time}}s linear forwards;
    {{-- animation: followpathmax 1s linear forwards; --}}

}

.pause{
    animation-play-state: paused;
}
@keyframes followpathmax {
    0%{
        offset-distance: 6.25%;
    }
    6.13%{

        offset-distance: 0%;
    }
    19.68%{

        offset-distance: -14.25%;

    }

    25.06%{

        offset-distance: -17.25%;
    }
    28.68%{

        offset-distance: -21.25%;
    }
    37.47%{

        offset-distance: -29.25%;
    }
    59.87%{

        offset-distance: -56.25%;

    }
    62.225%{
        offset-distance: -58.25%;
    }
    74.548%{
        offset-distance: -71.95%;
    }
    81.06%{
        offset-distance: -76.95%;
    }
    86.83%{
        offset-distance: -81.5%;
    }
    91.65%{
        offset-distance: -84%;
    }

    100%{
        motion-offset: -93.75%;
        offset-distance: -93.75%;
    }
 }

</style>

</svg>