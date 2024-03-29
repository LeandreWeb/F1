<svg viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="svg">
        <path id="circuit"
            d="M638.523 365.94H796.483C825.4 365.94 846.979 343.93 850 318.466V225.675C850 192.011 840.937 184.243 812.452 170.864L742.967 148.421C707.577 129 669.597 188.127 714.914 209.706L736.925 217.907C767.136 231.286 771.02 243.37 776.63 267.539C781.378 301.203 755.483 303.361 746.419 296.887L499.984 148.421C480.649 138.754 446.899 136.337 428.341 164.39L376.551 239.054C367.056 250.707 361.445 261.928 361.014 274.013L361.445 289.981C361.445 310.697 348.066 318.466 339.866 318.466H283.328C258.728 318.466 242.328 310.266 222.906 300.339L155.148 255.886C126.231 233.444 150.832 215.317 162.916 215.317H266.065C325.192 215.317 353.677 138.495 294.981 129H155.148C23.5139 145.4 36.0299 247.686 82.2097 271.855L126.231 289.981C151.695 297.75 156.302 314.15 155.148 330.119C152.558 365.94 177.158 365.94 181.474 365.94H638.523Z"
            stroke="black" stroke-width="13" />
            <path id="start-line" d="M638.341 355.583L637.998 376.544" stroke="white" stroke-width="3"/>
            <circle class="driver_circle pause team_{{$teamid}}--fill "  r="12" />
    </g>


    <style>
        svg {
            padding: 25px;

        }



        .driver_circle{

            position: absolute;
            offset-distance: 0%;
            aspect-ratio: 1/1;
            width: 25px;
            z-index: 1;
            offset-path: path("M638.523 365.94H796.483C825.4 365.94 846.979 343.93 850 318.466V225.675C850 192.011 840.937 184.243 812.452 170.864L742.967 148.421C707.577 129 669.597 188.127 714.914 209.706L736.925 217.907C767.136 231.286 771.02 243.37 776.63 267.539C781.378 301.203 755.483 303.361 746.419 296.887L499.984 148.421C480.649 138.754 446.899 136.337 428.341 164.39L376.551 239.054C367.056 250.707 361.445 261.928 361.014 274.013L361.445 289.981C361.445 310.697 348.066 318.466 339.866 318.466H283.328C258.728 318.466 242.328 310.266 222.906 300.339L155.148 255.886C126.231 233.444 150.832 215.317 162.916 215.317H266.065C325.192 215.317 353.677 138.495 294.981 129H155.148C23.5139 145.4 36.0299 247.686 82.2097 271.855L126.231 289.981C151.695 297.75 156.302 314.15 155.148 330.119C152.558 365.94 177.158 365.94 181.474 365.94H638.523Z");
            animation: followpath {{$time}}s linear forwards;


        }

        .pause{
            animation-play-state: paused;
        }


        @keyframes followpath {
            {{-- Start --}} 0% {
                offset-distance: 0%;
            }
            {{-- T1 --}} 14.38% {
                offset-distance: -17.25%;
            }

            {{-- T2 --}} 17% {
                offset-distance: -19.5%;
            }

            {{-- T3 --}} 22.67% {
                offset-distance: -25%;
            }

            {{-- T4 --}} 31.19% {
                offset-distance: -35.5%;
            }

            {{-- T5 --}}  43.30% {
                offset-distance: -45%;
            }

            {{-- T6 --}} 50.71% {
                offset-distance: -51%;
            }

            {{-- T7 --}} 53.99% {
                offset-distance: -54%;

            }

            {{-- T8 --}} 56.46% {
                offset-distance: -55.5%;

            }

            {{-- T9 --}} 62.15% {
                offset-distance: -62.5%;
            }

            {{-- T10 --}} 73.37% {
                offset-distance: -74%;
            }

            {{-- T11 --}} 77.92% {
                offset-distance:-77%;
            }

            {{-- T12 --}} 83.54% {
                offset-distance:-80.5%;
            }

            {{-- T13 --}} 89.90% {
                offset-distance: -87%;
            }

            {{-- T14 --}} 94.82% {
                offset-distance: -92.75%;
            }

            {{-- End --}} 100% {
                motion-offset: -100%;
                offset-distance: -100%;
            }

        }
    </style>


</svg>
