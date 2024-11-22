
// Toghle navbar
let nemuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

nemuIcon.onclick =() => {
    nemuIcon.classList.toggle('fa-xmark');
    navbar.classList.toggle('active')

}

// scroll section active

let sections = document.querySelector('section');
let navlinks = document.querySelector('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = offsetHeight;
        let id = sec.getAttribute('id');

        if(top>= offset && top < offset +height){
            navlinks.forEach.apply(links =>{
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id +']').classList.add('active');
            });
        };  
    });

    // Sticky navbar

    let header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY >100);

    // remove toogle icon and navbar 
    nemuIcon.classList.remove('fa-xmark');
    navbar.classList.remove('active');

}

// scrool reveal
ScrollReveal({
    distance: '80px',
    duration: 2000,
    delay:200,
});

ScrollReveal().reveal('.home-content, heading', {origin:'top'});
ScrollReveal().reveal('.home-img, .service-container, .portofolio-box, .contact form', {origin:'bottom'});
ScrollReveal().reveal('.home-content h1, .about-img', {origin:'left'});
ScrollReveal().reveal('.home.content p, .about-content', {origin:'right'});

// Typed js
const typed = new Typed('.text', {
    strings: ['Front End developer','Mobile Developer', 'Game Developer'],
    typeSpeed: 80,
    backspeed: 80,
    backDelay: 1000,
    loop : true,
});


