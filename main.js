 /*For active menu
        var menu = document.getElementById("navbar");
        var items = menu.getElementsByClassName("items");
        for(var i = 0 ; i < items.length ; i++) {
            items[i].addEventListener("click", function(){
                var active = document.getElementsByClassName("active");
                active[0].className = active[0].className.replace(" active", "");
                this.className += " active";
            });
        }*/
       
//console.log("Hello");
const sections = document.querySelectorAll('section');
//console.log(sections);
const navLiA = document.querySelectorAll('nav ul li a');
window.addEventListener('scroll', ()=>{
    let current = "";
    console.log(pageYOffset);
    //console.log(sections);
    sections.forEach( section => {
        console.log();
        const sectionTop = $(section).offset().top;
        const sectionHeight = section.clientHeight;
        //console.log("sectiontop: "+sectionTop);
        //console.log("sectionHeight: "+sectionHeight);
        if(pageYOffset >= (sectionTop) - sectionHeight/3) {
            current = section.getAttribute('id');
        }
    })
    //console.log(current);
    navLiA.forEach( a =>{
        a.classList.remove('active');
        if(a.classList.contains(current)){
            console.log(current);
            a.classList.add('active');
        }
    })
})