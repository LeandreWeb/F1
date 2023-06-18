const observer = new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        if (entry.isIntersecting) {
            entry.target.classList.add('visible_driver')
        }
        else{
            entry.target.classList.remove('visible_driver')
        }
    })
})


let driver= document.querySelectorAll(".team__driver__card__container")

driver.forEach(car => { observer.observe(car)

});
