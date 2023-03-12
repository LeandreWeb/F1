<div class="driver-card">
    <div class="driver-info">
        <div class="driver-points">85 Points</div>
        <div class="driver-fullname">
            <h4 class="driver-firstname">Max</h4>
            <h3 class= "driver-lastname">Versatpen</h3>
        </div>
    </div>
    <div class="driver-photo">
        <img src="{{asset('Images/Drivers/Side-profil/max.avif')}}" alt="">
        <h2 class="driver-position">1</h2>
    </div>
</div>

<style>
.driver-card{
    position: relative;
    background-color: var(--background-light);
    width: 400px;
    display: flex;
    justify-content: space-between;
    padding: 10px ;
    border-radius: 20px ;

    
}
 .driver-info{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    flex: 1;
    font-weight: 700;
 }
 .driver-points{
    font-size: 40px
 }
 .driver-firstname{
    font-size: 24px;
 }
 .driver-lastname{
    font-size: 32px;
 }

 .driver-photo{
    display: flex;
    justify-content: flex-end;
    background-size: contain;
    background-repeat: no-repeat;
    background-image: url({{url("Images/Teams/redbull.png")}});
    
    
    
 }

 .driver-photo img{
    object-fit: cover;

 }

 .driver-position{
    position: absolute;
    top: 0px;
    right: 10px;
    font-size: 128px;
    font-weight: 800;
 }

 @media screen and (max-width: 500px) {
    
    .driver-card {
        flex-direction: column;
        width: 100%;
    }
    
  }
</style>