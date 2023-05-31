const observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('visible')
        }
        else{
            entry.target.classList.remove('visible')
        }
    })
})


let cars= document.querySelectorAll(".team_animation")

cars.forEach(car => { observer.observe(car)

});
