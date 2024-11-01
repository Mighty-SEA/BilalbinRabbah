@extends('landingpages.layout.app')

@section('content')
<section id="curriculum-page" class="pt-32 pb-28">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-green-800">Kurikulum MDT Bilal Bin Rabbah</h2>
            <p class="text-gray-700 mt-2">Daftar buku dan penjelasan untuk kurikulum MDT Bilal Bin Rabbah.</p>
        </div>

        @section('content')
        <div class="flex flex-wrap justify-center gap-6">
            @foreach($buku as $book)
                <div class="w-full md:w-1/2 lg:w-1/3 bg-white rounded-lg shadow-md p-6 border border-gray-200 text-center max-w-xs mx-auto mb-4">
                    <img src="{{ asset('storage/' . $book->image_path) }}" alt="{{ $book->name }}" class="w-32 h-40 object-cover rounded-md mx-auto mb-4">
                    <h3 class="text-2xl font-semibold text-green-700">{{ $book->name }}</h3>
                    <p class="text-gray-600 mt-2 text-justify">
                        {{ $book->deskripsi }}
                    </p>
                </div>
            @endforeach
        </div>
</section>
@endsection
