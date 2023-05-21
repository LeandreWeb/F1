<svg  viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="svg autralia">
        <path id="circuit" d="M655.912 138.847C667.543 126.003 738.299 80.6697 772.223 59.6083C797.978 39.7208 803.897 59.6082 798.705 66.341C795.07 102.076 769.627 164.225 729.645 191.156C695.582 221.816 663.181 225.337 634.103 219.64C608.141 216.533 599.833 213.426 583.217 225.337C552.582 241.392 571.274 266.77 540.639 266.77C521.531 266.77 498.753 277.128 489.753 282.307C470.021 289.557 454.963 321.149 435.232 336.687C419.135 353.259 397.327 350.152 381.23 361.028C361.499 371.386 351.114 398.317 325.671 408.675C305.42 423.176 281.188 415.408 276.861 408.675C262.842 386.923 246.745 408.675 234.802 405.05C217.148 405.05 218.186 397.169 180.281 408.675C156.396 415.926 149.127 443.375 129.395 453.733C93.5671 465.644 89.4131 426.802 116.933 420.069L213.513 378.119C239.995 368.279 246.745 380.44 266.995 371.386C279.042 366 287.938 373.63 290.881 378.119C301.266 392.102 310.093 391.584 329.824 382.78C359.941 372.94 337.094 357.921 364.614 343.419C386.422 327.364 401.837 350.67 422.25 333.061C442.663 315.452 422.25 301.987 441.462 297.326L498.58 264.18C501.868 261.418 512.495 255.997 528.696 256.412C548.947 256.929 554.658 249.161 546.35 241.392C539.704 235.177 545.312 230.171 548.947 228.445C578.024 203.758 640.127 151.277 655.912 138.847Z" stroke="black" stroke-width="16"/>
        <path id="start-line" d="M646.046 126.936L663.571 149.426" stroke="white" stroke-width="3"/>
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
            offset-path: path("M655.912 138.847C667.543 126.003 738.299 80.6697 772.223 59.6083C797.978 39.7208 803.897 59.6082 798.705 66.341C795.07 102.076 769.627 164.225 729.645 191.156C695.582 221.816 663.181 225.337 634.103 219.64C608.141 216.533 599.833 213.426 583.217 225.337C552.582 241.392 571.274 266.77 540.639 266.77C521.531 266.77 498.753 277.128 489.753 282.307C470.021 289.557 454.963 321.149 435.232 336.687C419.135 353.259 397.327 350.152 381.23 361.028C361.499 371.386 351.114 398.317 325.671 408.675C305.42 423.176 281.188 415.408 276.861 408.675C262.842 386.923 246.745 408.675 234.802 405.05C217.148 405.05 218.186 397.169 180.281 408.675C156.396 415.926 149.127 443.375 129.395 453.733C93.5671 465.644 89.4131 426.802 116.933 420.069L213.513 378.119C239.995 368.279 246.745 380.44 266.995 371.386C279.042 366 287.938 373.63 290.881 378.119C301.266 392.102 310.093 391.584 329.824 382.78C359.941 372.94 337.094 357.921 364.614 343.419C386.422 327.364 401.837 350.67 422.25 333.061C442.663 315.452 422.25 301.987 441.462 297.326L498.58 264.18C501.868 261.418 512.495 255.997 528.696 256.412C548.947 256.929 554.658 249.161 546.35 241.392C539.704 235.177 545.312 230.171 548.947 228.445C578.024 203.758 640.127 151.277 655.912 138.847Z");

            animation: followpath {{ $time }}s linear forwards;

        }

        .pause {
            animation-play-state: paused;
        }

        @keyframes followpath {
            {{-- Start --}} 0% {
                offset-distance: 0%;
            }
             {{-- T1 --}} 7.6% {
                offset-distance: -8%;
            }

            {{-- T2 --}} 9.05% {
                offset-distance: -9.2%;
            }

            {{-- T3 --}} 13.26% {
                offset-distance: -11.5%;
            }

            {{-- T4 --}} 18.91% {
                offset-distance: -16.5%;
            }

            {{-- T5 --}}  20.96% {
                offset-distance: -18.5%;
            }

            {{-- T6 --}} 23.69% {
                offset-distance: -21%;
            }

            {{-- T7 --}} 25.57% {
                offset-distance: -23%;
            }

            {{-- T8 --}} 26.85% {
                offset-distance: -24%;
            }

            {{-- T9 --}} 29.12% {
                offset-distance: -26.5%;
            }

            {{-- T10 --}} 30.92% {
                offset-distance: -28%;
            }

            {{-- T11 --}} 32.40% {
                offset-distance:-29.25%;
            }

            {{-- T12 --}} 34.10% {
                offset-distance: -31%;
            }

            {{-- T13 --}} 41.61% {
                offset-distance: -40%;
            }

            {{-- T14 --}} 48.61% {
                offset-distance: -46%;
            }

            {{-- T15 --}}  51.36% {
                offset-distance: -49%;
            }

            {{-- T16 --}} 52.06% {
                offset-distance: -50.5%;
            }

            {{-- T17 --}} 55.01% {
                offset-distance: -52%;
            }

            {{-- T18 --}} 58.36% {
                offset-distance: -54%;
            }

            {{-- T19 --}} 61.56% {
                offset-distance: -58%;
            }
            {{-- T20 --}} 64.34% {
                offset-distance: -61%;
            }
            {{-- T21 --}} 67.11% {
                offset-distance: -67%;
            }
            {{-- T22 --}} 70.35% {
                offset-distance: -70%;
                        }
            {{-- T23 --}} 72.26% {
                offset-distance: -72%;
                        }
            {{-- T24 --}} 74.70% {
                offset-distance: -74%;
                        }
            {{-- T25 --}} 78.05% {
                offset-distance: -78%;
                        }
            {{-- T26 --}} 85.17% {
                offset-distance: -84%;
                        }
            {{-- T27 --}} 89.97%
            {
                 offset-distance: -90.75%;
            }
            {{-- End --}} 100% {
                motion-offset: -100%;
                offset-distance: -100%;
            }
        }
    </style>

</svg>
