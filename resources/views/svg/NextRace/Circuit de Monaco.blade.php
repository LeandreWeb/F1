<svg class="usa-svg"  viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path id="circuit" d="M117.03 211.044C94.7144 237.485 65.0177 313.518 52.9589 348.229C50.1277 356.379 54.2665 367.698 41.1907 380.375C34.2169 384.45 35.0886 391.396 39.0114 395.769C56.8817 415.69 67.3423 418.54 77.803 424.292C83.7307 427.552 86.956 426.103 89.1353 420.218C94.7144 411.887 83.905 394.41 82.1616 380.375C81.8129 359.005 82.1616 354.115 86.0843 338.722L108.749 290.277C110.493 285.296 113.979 284.844 117.03 286.202L125.312 289.371C132.721 292.54 132.721 290.729 136.208 286.202L184.153 217.383C191.998 209.686 181.974 186.143 190.255 176.635C215.535 144.489 245.609 128.643 271.761 122.304C276.991 119.588 286.58 122.304 288.324 123.663L410.365 223.269C414.723 225.985 413.851 235.493 416.031 239.115C416.031 239.115 419.518 241.971 423.876 245.454C429.542 249.981 434.482 245.001 435.209 242.737C439.742 235.131 442.618 239.379 446.977 242.737C553.327 324.686 566.839 308.387 623.065 334.194C651.831 346.871 676.675 346.871 697.161 341.438C741.183 326.044 753.387 322.875 790.435 296.615L858.429 236.852C867.582 228.249 863.193 223.269 861.044 220.552C853.025 210.411 845.353 209.724 826.611 198.367C814.059 190.761 803.511 194.745 801.767 204.706L798.716 236.852C797.67 252.789 776.052 248.623 784.333 233.23L784.364 233.172C787.518 227.308 790.435 221.887 790.435 214.667C790.435 206.517 790.435 197.009 800.024 186.596C817.534 167.58 807.869 150.828 785.641 154.903L684.085 166.222C630.038 174.371 635.269 189.312 635.269 211.044C635.269 277.147 588.632 280.769 559.865 272.619C535.457 258.584 503.29 225.533 468.77 216.478C434.25 207.422 375.932 153.997 289.631 98.761C266.618 71.9579 260.864 80.1982 245.609 92.8752C187.204 112.796 182.845 133.064 117.03 211.044Z" stroke="black" stroke-width="16"/>
    <path id="start-line" d="M110.493 200.178L130.068 214.552" stroke="white" stroke-width="3"/>
    <circle class="circle-path" r="12.5" >
        <animateMotion
          keyPoints="1;0" keyTimes="0;1"
          dur="5s"
          repeatCount="indefinite">
          <mpath xlink:href="#circuit" />
        </animateMotion>
      </circle>
    </svg>




<style>
    .circle-path{
        fill: var(--accent);
        offset-distance: -25;
    }
    svg:not(:root){
        overflow: visible;
    }
    .usa-svg{
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
