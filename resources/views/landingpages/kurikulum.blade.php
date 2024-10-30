@extends('landingpages.layout.app')

@section('content')
<section id="curriculum-page" class="pt-32 pb-28">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-green-800">Kurikulum MDT Bilal Bin Rabbah</h2>
            <p class="text-gray-700 mt-2">Daftar buku dan penjelasan untuk kurikulum MDT Bilal Bin Rabbah.</p>
        </div>

        <div class="flex flex-wrap gap-8 justify-center">
            <!-- Book Card 1 -->
            <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg shadow-md p-6 border border-gray-200 text-center">
                <img src="{{ asset('images/book1.png') }}" alt="Buku 1" class="w-32 h-40 object-cover rounded-md mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-green-700">Nama Buku 1</h3>
                <p class="text-gray-600 mt-2 text-justify">
                    Penjelasan singkat mengenai isi buku ini, yang mencakup materi dan topik pembelajaran sesuai kurikulum.
                </p>
            </div>

            <!-- Book Card 2 -->
            <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg shadow-md p-6 border border-gray-200 text-center">
                <img src="{{ asset('images/book2.png') }}" alt="Buku 2" class="w-32 h-40 object-cover rounded-md mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-green-700">Nama Buku 2</h3>
                <p class="text-gray-600 mt-2 text-justify">
                    Deskripsi buku ini beserta manfaatnya dalam mendukung materi pembelajaran di MDT.
                </p>
            </div>

            <!-- Book Card 3 -->
            <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg shadow-md p-6 border border-gray-200 text-center">
                <img src="{{ asset('images/book3.png') }}" alt="Buku 3" class="w-32 h-40 object-cover rounded-md mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-green-700">Nama Buku 3</h3>
                <p class="text-gray-600 mt-2 text-justify">
                    Informasi mengenai buku ini dan bagaimana materi di dalamnya mendukung kegiatan pembelajaran.
                </p>
            </div>

            <!-- Book Card 4 -->
            <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg shadow-md p-6 border border-gray-200 text-center">
                <img src="{{ asset('images/book4.png') }}" alt="Buku 4" class="w-32 h-40 object-cover rounded-md mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-green-700">Nama Buku 4</h3>
                <p class="text-gray-600 mt-2 text-justify">
                    Penjelasan mengenai isi buku ini yang relevan dengan kurikulum MDT.
                </p>
            </div>

            <!-- Book Card 5 -->
            <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg shadow-md p-6 border border-gray-200 text-center">
                <img src="{{ asset('images/book5.png') }}" alt="Buku 5" class="w-32 h-40 object-cover rounded-md mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-green-700">Nama Buku 5</h3>
                <p class="text-gray-600 mt-2 text-justify">
                    Deskripsi singkat tentang buku ini dan bagaimana materi di dalamnya bermanfaat.
                </p>
            </div>

            <!-- Book Card 6 -->
            <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg shadow-md p-6 border border-gray-200 text-center">
                <img src="{{ asset('images/book6.png') }}" alt="Buku 6" class="w-32 h-40 object-cover rounded-md mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-green-700">Nama Buku 6</h3>
                <p class="text-gray-600 mt-2 text-justify">
                    Informasi mengenai materi yang dibahas dalam buku ini untuk kurikulum MDT.
                </p>
            </div>

            <!-- Book Card 7 -->
            <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg shadow-md p-6 border border-gray-200 text-center">
                <img src="{{ asset('images/book7.png') }}" alt="Buku 7" class="w-32 h-40 object-cover rounded-md mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-green-700">Nama Buku 7</h3>
                <p class="text-gray-600 mt-2 text-justify">
                    Deskripsi singkat tentang buku ini yang mendukung proses pembelajaran di MDT.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
