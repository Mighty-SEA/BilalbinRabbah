@extends('landingpages.layout.app')

@section('content')

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
        <p class="text-4xl font-bold text-green-600">{{$muridterdaftar}}</p>
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
        <p class="text-4xl font-bold text-green-600">{{$muridlulus}}</p>
    </div>
</a>


            </div>
        </div>
    </div>
</section>



</body>
   <!-- Footer -->
<!-- resources/views/components/footer.blade.php -->







</html>



@endsection
