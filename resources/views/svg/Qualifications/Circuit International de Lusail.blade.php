<svg viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="svg">
        <path id="circuit"
            d="M428.252 462.156H712.21C753.927 462.156 754.875 427.076 744.445 413.803L651.057 275.379C640.818 261.347 649.161 249.306 655.324 242.67L728.802 151.651C735.249 142.17 734.49 132.215 730.698 126.053L700.833 72.0106C696.092 60.1593 685.663 52.5745 674.286 52.5745H623.562C610.763 51.6264 595.119 59.2112 588.008 73.9068L566.202 132.215C560.039 160.184 515.004 254.521 434.415 256.417C412.804 256.926 412.451 236.191 414.979 226.078L429.675 172.984C435.345 149.829 428.297 144.103 420.74 137.963L420.668 137.904C414.6 132.974 401.389 119.1 395.543 112.779C382.269 100.928 374.21 79.1214 370.892 56.8416C370.892 22.2349 318.272 23.6574 315.428 53.5233L300.258 187.206C297.888 200.005 276.556 205.694 269.919 187.68L236.735 94.2909C232.943 83.8626 218.721 74.8555 206.87 78.1731L165.627 92.8687C151.216 98.1781 147.613 108.987 151.406 126.052C167.049 170.139 198.906 260.209 201.181 267.794C209.24 287.704 215.719 287.388 221.565 292.445L275.133 319.466C303.576 334.636 290.777 364.501 281.77 368.767L219.669 402.425C183.167 418.069 196.441 463.578 225.358 462.156H428.252Z"
            stroke="black" stroke-width="13" />
        <path id="start-line" d="M427.335 451.253L427.304 474.278" stroke="white" stroke-width="3" />
        <circle class="driver_circle pause team_{{ $teamid }}--fill" r="12" />
    </g>


    <style>
        svg {
            padding: 25px;

        }



        .driver_circle {
            position: absolute;
            offset-distance: 0%;
            aspect-ratio: 1/1;
            width: 25px;
            z-index: 1;
            offset-path: path("M428.252 462.156H712.21C753.927 462.156 754.875 427.076 744.445 413.803L651.057 275.379C640.818 261.347 649.161 249.306 655.324 242.67L728.802 151.651C735.249 142.17 734.49 132.215 730.698 126.053L700.833 72.0106C696.092 60.1593 685.663 52.5745 674.286 52.5745H623.562C610.763 51.6264 595.119 59.2112 588.008 73.9068L566.202 132.215C560.039 160.184 515.004 254.521 434.415 256.417C412.804 256.926 412.451 236.191 414.979 226.078L429.675 172.984C435.345 149.829 428.297 144.103 420.74 137.963L420.668 137.904C414.6 132.974 401.389 119.1 395.543 112.779C382.269 100.928 374.21 79.1214 370.892 56.8416C370.892 22.2349 318.272 23.6574 315.428 53.5233L300.258 187.206C297.888 200.005 276.556 205.694 269.919 187.68L236.735 94.2909C232.943 83.8626 218.721 74.8555 206.87 78.1731L165.627 92.8687C151.216 98.1781 147.613 108.987 151.406 126.052C167.049 170.139 198.906 260.209 201.181 267.794C209.24 287.704 215.719 287.388 221.565 292.445L275.133 319.466C303.576 334.636 290.777 364.501 281.77 368.767L219.669 402.425C183.167 418.069 196.441 463.578 225.358 462.156H428.252Z");
            animation: followpath {{ $time }}s linear forwards;

        }

        .pause {
            animation-play-state: paused;
        }


        @keyframes followpath {
            {{-- Start --}} 0% {
                offset-distance: 0%;
            }

            {{-- T1 --}} 12.30% {
                offset-distance: -10%;
            }

            {{-- T2 --}} 19% {
                offset-distance: -15.5%;
            }

            {{-- T3 --}} 23.40% {
                offset-distance: -19.5%;
            }

            {{-- T4 --}} 30.1% {
                offset-distance: -27%;
            }

            {{-- T5 --}} 33.54% {
                offset-distance: -30%;
            }

            {{-- T6 --}} 40.71% {
                offset-distance: -36%;
            }

            {{-- T7 --}} 48.94% {
                offset-distance: -43.5%;

            }

            {{-- T8 --}} 54.71% {
                offset-distance: -47%;

            }

            {{-- T9 --}} 57.22% {
                offset-distance: -49.5%;
            }

            {{-- T10 --}} 61.52% {
                offset-distance: -53.5%;
            }

            {{-- T11 --}} 67.13% {
                offset-distance: -56.5%;
            }

            {{-- T12 --}} 71.78% {
                offset-distance: -65%;
            }

            {{-- T13 --}} 75.27% {
                offset-distance: -68.5%;
            }

            {{-- T14 --}} 78.82% {
                offset-distance: -72.25%;
            }

            {{-- T15 --}} 84.07% {
                offset-distance: -78.75%;
            }

            {{-- T16 --}} 92.73% {
                offset-distance: -87%;
            }

            {{-- End --}} 100% {
                motion-offset: -100%;
                offset-distance: -100%;
            }

        }
    </style>


</svg>
