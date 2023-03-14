console.log("Hello from Lbb");

const hamburger = document.querySelector(".hamburger");

hamburger.addEventListener('click',()=>{

    const navMenu = document.querySelector(".nav-menu")
    console.log("Click ");

    if(hamburger.classList.contains('open-hamburger')){
        hamburger.classList.remove('open-hamburger');
        hamburger.classList.add('closed-hamburger')
        navMenu.classList.remove("nav-open")
        navMenu.classList.add("nav-closed")

    }
    else{

        hamburger.classList.remove('closed-hamburger');
        hamburger.classList.add('open-hamburger')
        navMenu.classList.remove("nav-closed")
        navMenu.classList.add("nav-open")
        
    }
})
