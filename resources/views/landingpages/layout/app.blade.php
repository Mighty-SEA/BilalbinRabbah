<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDT Bilal Bin Rabbah</title>
    <link rel="icon" href="asset/logo.png" type="image/x-icon">
    @vite('resources/css/app.css')

    <!-- Navbar -->
<!-- Navbar -->
<nav id="navbar" class="fixed top-0 left-0 right-0 bg-white rounded-lg border border-green-600 shadow-lg mx-4 mt-4 p-4 transition-all duration-300 ease-in-out z-50">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo dan Nama -->
        <div class="flex items-center space-x-2">
            <img src="asset/logo.png" alt="Logo" class="w-12 h-12">
            <span class="font-bold text-lg text-green-600">MDT Bilal Bin Rabbah</span>
        </div>

        <!-- Links -->
        <ul class="hidden md:flex space-x-4">
            <li><a href="{{url('/')}}" class="hover:text-green-500">Beranda</a></li>
            <li><a href="{{url('/profil')}}" class="hover:text-green-500">Profil</a></li>
            <li><a href="{{url('/kurikulum')}}" class="hover:text-green-500">Kurikulum</a></li>
        </ul>

        <!-- Mobile Menu Button -->
        <button id="menuButton" class="md:hidden text-gray-700 hover:text-green-500">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <ul id="mobileMenu" class="absolute top-16 left-0 w-full bg-white shadow-lg rounded-lg hidden flex-col items-center space-y-4 p-4">
        <li><a href="{{url('/index')}}" class="hover:text-green-500">Beranda</a></li>
        <li><a href="{{url('/profil')}}" class="hover:text-green-500">Profil</a></li>
        <li><a href="{{url('/kurikulum')}}" class="hover:text-green-500">Kurikulum</a></li>
    </ul>
</nav>

<script>
    const navbar = document.getElementById('navbar');
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    // Show/hide mobile menu
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Change navbar style on scroll
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.remove('rounded-lg', 'mx-4', 'mt-4');
            navbar.classList.add('bg-white', 'w-full');
        } else {
            navbar.classList.add('rounded-lg', 'mx-4', 'mt-4');
            navbar.classList.remove('w-full');
        }
    });

    // Menyembunyikan menu ketika mengklik di luar menu
    document.addEventListener('click', (event) => {
        if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>

<body>
    @yield('content')
</body>

<footer id="footer-part" class="bg-green-900 text-white py-10">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row md:justify-between gap-8">

            <!-- Footer About -->
            <div class="flex items-start md:w-1/3 space-x-4">
                <!-- Logo and Company Name -->
                <div class="flex flex-col items-start">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('asset/logo2.png') }}" alt="Logo" class="w-16 h-16">
                        <img src="{{ asset('asset/logo.png') }}" alt="Logo" class="w-16 h-16">
                        <h3 class="text-xl font-semibold">MDT Bilal Bin Rabbah</h3>
                    </div>
                    <!-- Company Address -->
                    <p class="mt-4 text-center md:text-left">
                        Jl. Pasir Pogor Kp. Pasirpogor No.Rt 05/03, Malakasari, Kec. Baleendah, Kabupaten Bandung, Jawa Barat 40375
                    </p>
                </div>
            </div>

            <!-- Maps -->
            <div class="flex justify-center md:justify-center md:w-1/3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.022166473516!2d107.60545887409043!3d-7.006672568627507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e98b5d3428cb%3A0x5bdf1858a8fa5e17!2sMDT%20Bilal%20Bin%20Rabbah!5e0!3m2!1sen!2sid!4v1730188636230!5m2!1sen!2sid"
                    width="400" height="150" class="border-0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Contact Us -->
            <div class="flex flex-col items-center md:items-start md:w-1/3 space-y-4">
                <h6 class="text-xl font-semibold">Kontak Kami</h6>
                <div class="flex items-center space-x-2">
                    <i class="fa fa-envelope-o text-xl"></i>
                    <p>contact@namawebsite.com</p>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fa fa-phone text-xl"></i>
                    <p>(123) 456-7890</p>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fa fa-whatsapp text-xl"></i>
                    <p>+62 812-3456-7890</p>
                </div>
            </div>

        </div>
    </div>
</footer>



