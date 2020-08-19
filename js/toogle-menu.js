const navSlide = ()=>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.header_menu');
    const navLinks = document.querySelectorAll('.header_menu li');

    
    burger.addEventListener('click', ()=>{
        // Toggle nav
        nav.classList.toggle('menu_active');

        // Animate Links
        navLinks.forEach((link, index)=> {
            if (link.style.animation){
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`
            }
        });
        //burger Animation
        burger.classList.toggle('toggle');
    });
}


navSlide();
// const app = ()=>{
//     navSlide();
// }