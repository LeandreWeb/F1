<svg class="svg" viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path id="circuit"
    d="M714.545 245.529L568.2 213.989C567.079 213.569 562.649 212.391 553.902 211.045C542.968 209.363 543.389 203.476 543.809 198.85C544.23 194.224 542.127 193.804 533.717 192.122C525.306 190.439 295.696 139.135 248.597 130.304C193.507 126.098 138.418 124.416 106.878 124.837C93.8417 124.837 90.0569 121.893 70.7124 114.744C41.2753 106.333 46.3217 131.145 66.5071 129.883C109.401 136.191 164.491 149.228 265.418 240.483C272.147 247.211 271.796 257.724 267.941 266.976C266.259 271.013 266.259 273.136 268.782 275.387C331.021 330.897 351.627 347.569 469.375 389.35C479.805 393.051 487.458 393.976 499.654 393.976C522.783 388.089 521.101 382.201 524.465 367.483C526.652 357.913 536.24 358.652 542.127 360.754L592.591 384.725C598.647 388.089 605.207 389.35 613.197 390.191H626.654C636.326 390.191 649.363 380.099 660.717 375.052L704.032 363.698C718.161 357.979 722.114 366.911 727.581 370.847C735.992 376.903 735.151 377.262 743.561 373.791C770.055 362.857 822.399 335.102 844.068 304.403C859.207 282.956 841.966 269.92 830.191 278.751L819.257 288.423C813.37 295.572 812.949 292.732 805.8 288.423C775.101 269.92 752.813 254.36 714.545 245.529Z"
    stroke="black" stroke-width="13" />
    <path id="start-line" d="M715.871 235.857L712.022 255.917" stroke="white" stroke-width="3"/>
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
