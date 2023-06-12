console.log("Hello from Lbb");

const hamburger = document.querySelector(".hamburger");

const qualiStarter = document.querySelector(".start--animation");
const qualiDriver = document.querySelector(".driver_circle");
const navMenu = document.querySelector(".nav-menu");


hamburger.addEventListener("click", () => {
    console.log("Click ");

    if (hamburger.classList.contains("open-hamburger")) {
        hamburger.classList.remove("open-hamburger");
        hamburger.classList.add("closed-hamburger");
        navMenu.classList.remove("nav-open");
        navMenu.classList.add("nav-closed");
    } else {
        hamburger.classList.remove("closed-hamburger");
        hamburger.classList.add("open-hamburger");
        navMenu.classList.remove("nav-closed");
        navMenu.classList.add("nav-open");
    }
});

if (qualiStarter) {
    qualiStarter.addEventListener("click", () => {
        if (qualiDriver.classList.contains("ended")) {
            qualiDriver.classList.remove("driver_circle");
            setTimeout(() => {
                qualiDriver.classList.remove("ended");
                qualiDriver.classList.add("driver_circle");
            }, 0);
        } else if (!qualiDriver.classList.contains("pause")) {
            qualiDriver.classList.add("pause");
            qualiStarter.innerHTML = "Démarrer";
        } else {
            qualiDriver.classList.remove("pause");
            qualiStarter.innerHTML = "Pause";
        }
    });

    qualiDriver.addEventListener("animationend", () => {
        qualiDriver.classList.add("ended");
        qualiStarter.innerHTML = "Redémarré";
    });
}

window.addEventListener("resize", () => {
    if (window.innerWidth > 800) {
        hamburger.classList.remove("open-hamburger");
        hamburger.classList.add("closed-hamburger");
        navMenu.classList.remove("nav-open");
        navMenu.classList.add("nav-closed");
    }
});

var path = document.querySelector('#horse');

console.log(path);

// var length = path.getTotalLength();

