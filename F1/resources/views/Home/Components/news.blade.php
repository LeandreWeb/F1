<section id="News-Top3">
    <div class="top-news">
        <h4 class="top-left">Nouvelle</h4>
            <img class="news-img" src="{{asset('Images/News1.jpg')}}" alt="">
        <div class="news-title">
            <h2>GP Bahrain</h2>
            <h3>Alonso et Aston Surprise</h3>
        </div>  
    </div>
    <div class="top3">
        <h2>Top 3</h2>
        <div class="top3-drivers"->
        @for ($i = 0 ; $i < 3 ; $i++)
            @include('Home.Components.driver-card' ,['position'=>$i])
        @endfor
        </div>
    </div>
</section>
