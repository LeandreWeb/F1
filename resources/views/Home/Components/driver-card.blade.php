<div class="driver-card">
    <div class="driver-info">
        <div class="driver-points">{{$driver->points}} Points</div>
        <div class="driver-fullname">
            <h4 class="driver-firstname">{{$driver->FirstName}}</h4>
            <h3 class= "driver-lastname">{{$driver->Lastname}}</h3>
        </div>
    </div>
    <div class="driver-photo">
        <img src="{{asset('Images/Drivers/Side-profil/'.$driver->Lastname.".avif")}}" alt="">
        <h2 class="driver-position">{{$position+1}}</h2>
        <img src="{{asset('Images/Teams/'.$driver->team->Name.' black.png')}}" class="driver-team" src="" alt="">
    </div>
</div>

<style>
.driver-card{
    position: relative;
    background-color: var(--background-light);
    width: 375px;
    display: flex;
    justify-content: space-between;
    padding: 10px ;
    border-radius: 20px ;
    
    box-shadow: var(--card-shadow);



}
 .driver-info{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    flex: 1;
    font-weight: 700;
    z-index: 1;
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

 }

 .driver-photo img{
    object-fit: cover;

 }

 .driver-photo img:first-child{
   background-color:transparent;
   z-index: 1;
   margin-bottom: -10px;
 }

 .driver-team {
   position: absolute;
   width: 75%;
   object-fit: contain !important;
   top:10%;
   aspect-ratio:2/1;
   right: 0px;

   opacity: .4;
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
    .driver-team {
   position: absolute;
   width: 100%;
   object-fit: contain !important;
   top:30%;
   aspect-ratio:2/1;
   right: 0px;
   left: 0px;

   opacity: .4;
 }

  }
</style>
