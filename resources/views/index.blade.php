<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Stylesheet dan Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body>

    <!-- Header -->
    <header class="header">
        <a href="/" class="logo">Fanny</a>
        <i class="fa-solid fa-bars" id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About Me</a>
            <a href="#services">Services</a>
            <a href="#portofolio">Portofolio</a>
            <a href="#contact">Contact Me</a>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by @Tiffany | All Right Reserved</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class="fa-solid fa-angle-up"></i></a>
        </div>
    </footer>
    
    <!-- Typed JS -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- Scroll Reveal Js -->
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <script>
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


</script>
</body>
</html>
