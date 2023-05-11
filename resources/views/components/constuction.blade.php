<div class="contruction_container">
    <h2>En construction </h2>
</div>



<style>
    .contruction_container {
        border-top: solid 2px var(--text);
        border-bottom: solid 2px var(--text);
        margin: 010vw;
        overflow: hidden;

        & h2 {
            margin-left: 100%;
            font-size: 7.5rem;
            white-space: nowrap;
            animation: keepMoving 4s infinite linear;
            width: 100%;

            @media (width <=1145px) {
                font-size: 3.5rem;
            }

            @media (width <=550px) {
                font-size: 2rem;
            }

            & span {

                & img {
                    height: 128px;
                    width: 128px;
                    margin: auto;
                }
            }
        }
    }

    @keyframes keepMoving {
        0% {
            transform: translateX(0)
        }

        100% {
            transform: translateX(-200%)
        }
    }
</style>
