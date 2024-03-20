<div class="linkcard">
    <div class="img-wrapper">
        @include('Links.svg.wheel')
    </div>
    <div class="text">
        <p class="single-line">Quali</p>
    </div>
</div>

<style>
    .linkcard {
        width: 7.5rem;
        height: 11rem;
        background: linear-gradient(to bottom, var(--background-dark) 50%, var(--accent) 50%) top;
        background-size: 100% 200%;
        border: solid 2px var(--accent);
        border-radius: 7.5px;
        position: relative;
        display: flex;
        padding: 5px;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden;
        transition: .25s;

        & .img-wrapper {

            & svg {
                width: 100%;
                height: 100%;

                & path {
                    transition: .4s;

                }
            }
        }


        & .single-line {
            font-weight: 600;
            font-size: 1.2rem;
            text-align: center;
            transition: .4s;

        }

        &:hover {
            background-position: bottom;
            border-color: var(--background-darker);

            & .single-line {
                color: var(--background-darker);
            }

            & .img-wrapper svg path {
                stroke: var(--background-darker);
            }
        }

    }

    /* .linkcard::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        background-color: var(--accent);
        left: 0;
        top: 100%;
        transition: .1s;

    }

    .linkcard:hover::after {
        top: 0;
    } */
</style>
