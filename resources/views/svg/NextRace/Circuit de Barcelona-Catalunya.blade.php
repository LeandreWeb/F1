<svg class="svg" viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path id="circuit"
        d="M638.523 365.94H796.483C825.4 365.94 846.979 343.93 850 318.466V225.675C850 192.011 840.937 184.243 812.452 170.864L742.967 148.421C707.577 129 669.597 188.127 714.914 209.706L736.925 217.907C767.136 231.286 771.02 243.37 776.63 267.539C781.378 301.203 755.483 303.361 746.419 296.887L499.984 148.421C480.649 138.754 446.899 136.337 428.341 164.39L376.551 239.054C367.056 250.707 361.445 261.928 361.014 274.013L361.445 289.981C361.445 310.697 348.066 318.466 339.866 318.466H283.328C258.728 318.466 242.328 310.266 222.906 300.339L155.148 255.886C126.231 233.444 150.832 215.317 162.916 215.317H266.065C325.192 215.317 353.677 138.495 294.981 129H155.148C23.5139 145.4 36.0299 247.686 82.2097 271.855L126.231 289.981C151.695 297.75 156.302 314.15 155.148 330.119C152.558 365.94 177.158 365.94 181.474 365.94H638.523Z"
        stroke="black" stroke-width="13" />
    <path id="start-line" d="M638.341 355.583L637.998 376.544" stroke="white" stroke-width="3" />
    <circle class="circle-path" r="12.5">
        <animateMotion keyPoints="1;0" keyTimes="0;1" dur="5s" repeatCount="indefinite">
            <mpath xlink:href="#circuit" />
        </animateMotion>
    </circle>
</svg>




<style>
    .circle-path {
        fill: var(--accent);
        offset-distance: -25;
    }

    svg:not(:root) {
        overflow: visible;
    }

    .svg {
        display: block;
        width: 50vw;
        min-width: 20em;
        position: relative;

    }

    /* Solution 2 risque detre meilleure pour + tard dans quali */

    /* .square{
        position: absolute;
        offset-distance: 0%;
        fill: red;
        aspect-ratio:1/1;
        width: 25px;
        z-index: 1;
        offset-path: path("M291.909 171.809C295.572 171.809 311.369 165.549 318.81 162.419C327.205 157.501 347.886 146.68 363.455 142.746C399.17 148.111 393.981 134.25 386.922 126.649C412.678 107.423 512.842 43.4843 579.809 10.3972C586.868 5.62784 599.27 -0.780925 609 9.50291C600.414 56.898 564.737 87.3024 544.895 99.8219C493.954 136.486 453.889 109.075 432.711 116.365C398.941 127.991 410.961 135.592 399.514 145.428C388.066 155.265 384.632 144.534 349.145 156.607C313.659 168.679 298.205 204.896 271.876 206.684C245.547 208.473 232.382 221.887 218.073 234.406C203.764 246.926 181.442 250.055 173.429 250.95C163.23 252.088 153.396 241.113 149.389 238.43C147.057 236.869 140.613 237.536 132.791 240.219C131.417 241.649 103.027 242.007 94.442 241.113C73.3789 237.178 47.1263 260.935 36.6329 273.306C-5.03541 282.964 3.24483 264.363 12.5935 253.632C75.3249 231.455 106.271 222.632 114.475 221.439L141.376 220.992C145.001 220.694 154.541 218.31 160.264 218.31C178.58 229.04 182.777 233.363 183.731 232.17C193.08 229.488 214.41 223.139 218.073 220.992C221.736 218.846 223.034 211.752 223.225 208.473C229.177 198.1 242.113 196.401 247.836 196.848C298.777 212.944 287.33 171.809 291.909 171.809Z");
        animation: followpath 5s linear infinite reverse;
    }

    @keyframes followpath {
        from {
            offset-distance: 10%;
        }
  to {
    motion-offset: 100%;
    offset-distance: 110%;
  }
} */
</style>