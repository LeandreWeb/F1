
const selectorForm = document.querySelector(".year_selector")
const loader = document.querySelector(".loader")

const standingDrivers =document.querySelector(".standings--drivers")
const standingsTeams = document.querySelector('.standings--teams')

if (selectorForm) {
    
    selectorForm.addEventListener("change" ,()=>{
        loader.classList.add("loading")
        
        if (standingDrivers) {
            standingDrivers.parentElement.classList.add("standing-loading")
        }
        console.log("YOPOOOO")

    })
    
}

document.addEventListener("DOMContentLoaded",()=>{
    if (loader.classList.contains("loading")) {
        loader.classList.remove("loading")
    }
    if(standingDrivers){
        if (standingDrivers.parentElement.classList.contains("standing-loading")) {
            standingDrivers.parentElement.classList.remove("standing-loading")
        }
    }
    
})

