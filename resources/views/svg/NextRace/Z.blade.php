<svg class="svg" viewBox="0 0 917 515" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path id="circuit"
    d=""
    stroke="black" stroke-width="13" />
    
    <path id="start-line" d="M648.063 340.645L661.679 360.754" stroke="white" stroke-width="3"/>

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

</style>
