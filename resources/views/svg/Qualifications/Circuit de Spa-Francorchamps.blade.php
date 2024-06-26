<svg viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="svg">
        <path id="circuit"
            d="M255.315 359.497L290.315 332.497C298.093 326.496 300.889 330.997 301.315 333.997V340.997C301.315 346.997 304.315 346.026 310.815 344.997C389.815 332.497 395.315 317.054 443.815 293.497C457.815 286.697 462.315 289.997 474.315 291.497C537.815 305.997 547.315 319.997 556.315 329.997C606.815 406.997 624.315 410.997 629.815 414.497C642.815 426.497 658.815 432.997 680.815 438.497C696.815 442.497 712.815 440.497 719.315 430.497L738.315 395.997C741.815 385.997 742.315 381.497 732.815 374.497L679.315 349.997C668.315 344.497 664.815 331.497 668.315 321.497L672.815 310.997C676.815 293.997 668.815 284.997 654.815 280.997L566.315 258.997C537.315 249.497 531.815 228.497 531.815 201.497C530.215 188.697 539.815 177.349 555.315 172.497C612.815 154.497 634.815 147.497 673.315 126.997C683.815 120.997 689.815 124.497 694.315 128.997L720.315 159.497C732.815 171.997 753.815 152.497 741.315 137.497L680.315 71.9971C676.315 66.4965 666.481 66.9967 662.815 68.9965L642.315 76.9971C634.815 80.9971 623.815 81.4971 616.815 68.9965C612.815 64.497 603.315 63.9969 597.815 66.4965L420.815 144.496C401.815 153.496 389.815 156.996 377.815 165.996L311.815 220.996C293.315 234.496 276.315 220.996 259.315 262.996L198.815 331.497C176.315 359.497 167.315 382.497 157.315 418.497C150.315 437.497 160.815 433.497 167.315 427.497L255.315 359.497Z"
            stroke="black" stroke-width="13" />
        <path id="start-line" d="M248.315 349.997L262.956 369.374" stroke="white" stroke-width="3" />
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
            offset-path: path("M255.315 359.497L290.315 332.497C298.093 326.496 300.889 330.997 301.315 333.997V340.997C301.315 346.997 304.315 346.026 310.815 344.997C389.815 332.497 395.315 317.054 443.815 293.497C457.815 286.697 462.315 289.997 474.315 291.497C537.815 305.997 547.315 319.997 556.315 329.997C606.815 406.997 624.315 410.997 629.815 414.497C642.815 426.497 658.815 432.997 680.815 438.497C696.815 442.497 712.815 440.497 719.315 430.497L738.315 395.997C741.815 385.997 742.315 381.497 732.815 374.497L679.315 349.997C668.315 344.497 664.815 331.497 668.315 321.497L672.815 310.997C676.815 293.997 668.815 284.997 654.815 280.997L566.315 258.997C537.315 249.497 531.815 228.497 531.815 201.497C530.215 188.697 539.815 177.349 555.315 172.497C612.815 154.497 634.815 147.497 673.315 126.997C683.815 120.997 689.815 124.497 694.315 128.997L720.315 159.497C732.815 171.997 753.815 152.497 741.315 137.497L680.315 71.9971C676.315 66.4965 666.481 66.9967 662.815 68.9965L642.315 76.9971C634.815 80.9971 623.815 81.4971 616.815 68.9965C612.815 64.497 603.315 63.9969 597.815 66.4965L420.815 144.496C401.815 153.496 389.815 156.996 377.815 165.996L311.815 220.996C293.315 234.496 276.315 220.996 259.315 262.996L198.815 331.497C176.315 359.497 167.315 382.497 157.315 418.497C150.315 437.497 160.815 433.497 167.315 427.497L255.315 359.497Z");
            animation: followpath {{ $time }}s linear forwards;

        }

        .pause {
            animation-play-state: paused;
        }


        @keyframes followpath {
            {{-- Start --}} 0% {
                offset-distance: 0%;
            }

            {{-- T1 --}} 6.22% {
                offset-distance: -6%;
            }

            {{-- T2 --}} 16.77% {
                offset-distance: -15.25%;
            }

            {{-- T3 --}} 17.81% {
                offset-distance: -17%;
            }

            {{-- T4 --}} 19.52% {
                offset-distance: -19%;
            }

            {{-- T5 --}} 32.02% {
                offset-distance: -34.5%;
            }

            {{-- T6 --}} 33.80% {
                offset-distance: -36%;
            }

            {{-- T7 --}} 35.88% {
                offset-distance: -38.25%;

            }

            {{-- T8 --}} 42.83% {
                offset-distance: -44%;

            }

            {{-- T9 --}} 47.96% {
                offset-distance: -47.5%;
            }

            {{-- T10 --}} 53.77% {
                offset-distance: -55%;
            }

            {{-- T11 --}} 57.25% {
                offset-distance: -58%;
            }

            {{-- T12 --}} 62.17% {
                offset-distance: -64.5%;
            }

            {{-- T13 --}} 65.42% {
                offset-distance: -67%;
            }

            {{-- T14 --}} 70.45% {
                offset-distance: -71%;
            }

            {{-- T15 --}} 73.97% {
                offset-distance: -74%;
            }

            {{-- T16 --}} 82.73% {
                offset-distance: -84%;
            }

            {{-- T17 --}} 85.95% {
                offset-distance: -89%;
            }

            {{-- T18 --}} 93.39% {
                offset-distance: -96.5%;
            }

            {{-- T19 --}} 95.64% {
                offset-distance: -97.5%;
            }

            {{-- End --}} 100% {
                motion-offset: -100%;
                offset-distance: -100%;
            }

        }
    </style>


</svg>
