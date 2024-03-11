const observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if (entry.isIntersecting) {
            entry.target.classList.add('visible')
        }
        else{
            entry.target.classList.remove('visible')
        }
    })
})


let top5= document.querySelector(".top5")

observer.observe(top5);

