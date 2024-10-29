<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDT Bilal Bin Rabbah</title>
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
            <li><a href="#beranda" class="hover:text-green-500">Beranda</a></li>
            <li><a href="#profil" class="hover:text-green-500">Profil</a></li>
            <li><a href="#hubungi-kami" class="hover:text-green-500">Kurikulum</a></li>
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
        <li><a href="#beranda" class="hover:text-green-500">Beranda</a></li>
        <li><a href="#profil" class="hover:text-green-500">Profil</a></li>
        <li><a href="#hubungi-kami" class="hover:text-green-500">Hubungi Kami</a></li>
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




<!-- Hero Section with Image Slider -->
<div class="relative h-screen mt-16 md:mt-0 overflow-hidden"> <!-- Adjusted top margin for space from navbar -->
    <div class="absolute inset-0 h-full flex items-center justify-center">
        <!-- Slide 1 -->
        <div class="slide opacity-0 transition-opacity duration-700 ease-in-out relative w-full h-full">
            <img src="asset/image1.jpeg" alt="Image 1" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-green-500 opacity-50"></div> <!-- Green overlay -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
                <h2 class="text-2xl md:text-5xl font-bold text-white">Selamat Datang di Website Kami</h2>
                <p class="text-md md:text-xl text-white mt-2">Kami menyediakan solusi terbaik untuk Anda.</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide opacity-0 transition-opacity duration-700 ease-in-out relative w-full h-full hidden">
            <img src="asset/image2.jpeg" alt="Image 2" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-green-500 opacity-50"></div> <!-- Green overlay -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
                <h2 class="text-2xl md:text-5xl font-bold text-white">Inovasi untuk Masa Depan</h2>
                <p class="text-md md:text-xl text-white mt-2">Kami berkomitmen untuk memberikan yang terbaik.</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide opacity-0 transition-opacity duration-700 ease-in-out relative w-full h-full hidden">
            <img src="asset/image3.jpeg" alt="Image 3" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-green-500 opacity-50"></div> <!-- Green overlay -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
                <h2 class="text-2xl md:text-5xl font-bold text-white">Bergabunglah dengan Kami</h2>
                <p class="text-md md:text-xl text-white mt-2">Temukan solusi yang tepat untuk kebutuhan Anda.</p>
            </div>
        </div>

        <!-- Arrow Navigation -->
        <button class="absolute top-1/2 left-4 transform -translate-y-1/2 text-white text-lg md:text-2xl bg-gray-700 bg-opacity-50 rounded-full p-2 md:p-4 transition-transform duration-300 hover:scale-110 hover:bg-opacity-70 z-10" onclick="prevSlide()">&#10094;</button>
        <button class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white text-lg md:text-2xl bg-gray-700 bg-opacity-50 rounded-full p-2 md:p-4 transition-transform duration-300 hover:scale-110 hover:bg-opacity-70 z-10" onclick="nextSlide()">&#10095;</button>
    </div>
</div>

<script>
    let slideIndex = 0;
    const slides = document.querySelectorAll('.slide');

    // Function to show the slide with fade animation
    function showSlides(index) {
        slides.forEach((slide, i) => {
            slide.classList.add('opacity-0', 'hidden');
            slide.classList.remove('opacity-100');
            if (i === index) {
                slide.classList.remove('hidden');
                setTimeout(() => {
                    slide.classList.add('opacity-100');
                    slide.classList.remove('opacity-0');
                }, 10); // Delay to allow the transition to apply
            }
        });
    }

    // Next/Previous controls
    function nextSlide() {
        slideIndex = (slideIndex + 1) % slides.length;
        showSlides(slideIndex);
    }

    function prevSlide() {
        slideIndex = (slideIndex - 1 + slides.length) % slides.length;
        showSlides(slideIndex);
    }

    // Initialize slider
    showSlides(slideIndex);
</script>


<!-- Feature Section: Card Murid dan Formulir Pendaftaran Siswa -->
<section id="pendaftaran" class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Formulir Pendaftaran Siswa -->
            <div class="bg-white p-6 rounded-lg shadow-lg md:col-span-2">
                <h2 class="text-3xl font-semibold text-center text-green-800 mb-8">Formulir Pendaftaran Siswa</h2>
                <form action="/submit-registration" method="POST" class="space-y-4">
                    <!-- Nama -->
                    <div>
                        <label for="nama" class="block text-gray-700 font-medium">Nama</label>
                        <input type="text" id="nama" name="nama" class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Nama lengkap" required>
                    </div>
                    
                    <!-- Kelas -->
                    <div>
                        <label for="kelas" class="block text-gray-700 font-medium">Kelas</label>
                        <input type="text" id="kelas" name="kelas" class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Kelas" required>
                    </div>
                    
                    <!-- Asal Sekolah -->
                    <div>
                        <label for="asal_sekolah" class="block text-gray-700 font-medium">Asal Sekolah</label>
                        <input type="text" id="asal_sekolah" name="asal_sekolah" class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Nama sekolah asal" required>
                    </div>
                    
                    <!-- Alamat -->
                    <div>
                        <label for="alamat" class="block text-gray-700 font-medium">Alamat</label>
                        <textarea id="alamat" name="alamat" rows="3" class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Alamat lengkap" required></textarea>
                    </div>
                    
                    <!-- Nomor Telepon -->
                    <div>
                        <label for="nomor_telepon" class="block text-gray-700 font-medium">Nomor Telepon</label>
                        <input type="tel" id="nomor_telepon" name="nomor_telepon" class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Nomor telepon aktif" required>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="px-6 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-150">Daftar Sekarang</button>
                    </div>
                </form>
            </div>

            <!-- Card Murid -->
            <div class="flex flex-col space-y-4">
                <!-- Card Murid Terdaftar -->
<!-- Card Murid Terdaftar -->
<a href="#murid-terdaftar" 
   class="relative bg-cover bg-center p-6 rounded-lg shadow-lg flex-grow flex items-center justify-center transition-transform transform hover:scale-105"
   style="background-image: url('asset/image4.jpg');">
   
    <!-- Green overlay with reduced opacity on background -->
    <div class="absolute inset-0 bg-green-950 opacity-70 rounded-lg"></div>

    <!-- Content inside the overlay -->
    <div class="relative bg-white bg-opacity-80 p-4 rounded-lg">
        <h3 class="text-xl font-semibold text-gray-800">Murid Terdaftar</h3>
        <p class="text-4xl font-bold text-green-600">120</p>
    </div>
</a>

<!-- Card Murid Lulus -->
<a href="#murid-lulus" 
   class="relative bg-cover bg-center p-6 rounded-lg shadow-lg flex-grow flex items-center justify-center transition-transform transform hover:scale-105"
   style="background-image: url('asset/image5.jpg');">
   
    <!-- Green overlay with reduced opacity on background -->
    <div class="absolute inset-0 bg-green-950 opacity-70 rounded-lg"></div>

    <!-- Content inside the overlay -->
    <div class="relative bg-white bg-opacity-80 p-4 rounded-lg">
        <h3 class="text-xl font-semibold text-gray-800">Murid Lulus</h3>
        <p class="text-4xl font-bold text-green-600">80</p>
    </div>
</a>


            </div>
        </div>
    </div>
</section>



   <!-- Footer -->
   <footer class="bg-green-800 text-white py-10">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
        <!-- Logo dan Nama Perusahaan -->
        <div class="flex items-start md:w-1/3 space-x-4">
            <img src="asset/logo.png" alt="Logo" class="w-16 h-16">
            <div class="flex flex-col">
                <h3 class="text-xl font-semibold">MDT Bilal Bin Rabbah</h3>
                <p class="text-sm">Jl. Pasir Pogor Kp. Pasirpogor No.Rt 05/03, Malakasari</p>
                <p class="text-sm">Kec. Baleendah, Kabupaten Bandung, Jawa Barat 40375</p>
            </div>
        </div>
        <!-- Maps -->
        <div class="md:w-1/3 flex justify-center">
            <!-- Tambahkan peta Google Maps menggunakan iframe -->
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.022166473516!2d107.60545887409043!3d-7.006672568627507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e98b5d3428cb%3A0x5bdf1858a8fa5e17!2sMDT%20Bilal%20Bin%20Rabbah!5e0!3m2!1sen!2sid!4v1730188636230!5m2!1sen!2sid" 
                width="350" 
                height="150" 
                style="border:0;" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0">
            </iframe>
        </div>

        <!-- Kontak Kami -->
        <div class="md:w-1/3 flex flex-col items-start space-y-2">
            <h3 class="text-xl font-semibold">Kontak Kami</h3>
            <p>Email: contact@namawebsite.com</p>
            <p>Telepon: (123) 456-7890</p>
            <p>WhatsApp: +62 812-3456-7890</p>
        </div>
    </div>
</footer>


</body>
</html>
