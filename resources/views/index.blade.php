<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Stylesheet dan Font Awesome -->
    @vite('public/css/style.css')
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
</body>
</html>
