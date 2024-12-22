<x-layout>
    <div class="w-screen flex flex-col items-center justify-center h-screen bg-no-repeat bg-cover bg-center" style="background-image: url('{{ asset('iam_os-Gr7q7kqfnVU-unsplash.jpg') }}');">
        <div class="backdrop-blur-md bg-opacity-50 bg-black flex flex-col items-center justify-center w-full h-full">
            <h1 class="text-2xl text-white font-black text-center">Hasil Prediksi Status Mahasiswa</h1>
            <div class="flex flex-col items-center justify-center mt-10 text-white">
                <div class="text-2xl">
                    @if ($prediction['prediction'] === 'Enrolled')
                        <h2>Mahasiswa dengan nama <span class="text-green-500 font-black">{{ $prediction['name'] }}</span></h2>
                    @elseif ($prediction['prediction'] === 'Dropout')
                        <h2>Mahasiswa dengan nama <span class="text-red-500 font-black">{{ $prediction['name'] }}</span></h2>
                    @elseif ($prediction['prediction'] === 'Graduate')
                        <h2>Mahasiswa dengan nama <span class="text-blue-500 font-black">{{ $prediction['name'] }}</span></h2>
                    @endif
                </div>
                <div class="flex flex-col items-center justify-center text-center">
                    <h2 class="my-4">Dikategorikan sebagai mahasiswa:</h2>
                    @if ($prediction['prediction'] === 'Enrolled')
                        <h2 class="w-32 px-4 py-2 bg-green-500 rounded-lg">{{ $prediction['prediction'] }}</h2>
                    @elseif ($prediction['prediction'] === 'Dropout')
                        <h2 class="w-32 px-4 py-2 bg-red-500 rounded-lg">{{ $prediction['prediction'] }}</h2>
                    @elseif ($prediction['prediction'] === 'Graduate')
                        <h2 class="w-32 px-4 py-2 bg-blue-500 rounded-lg">{{ $prediction['prediction'] }}</h2>
                    @endif
                </div>
            </div>
            
            <div class="mt-40 flex flex-col items-center justify-center">
                <a href="/">
                    <button class="custom-hover-button px-4 py-2 mt-3 text-white rounded-md bg-gray-500">Kembali ke Home</button>
                </a>
            </div>
        </div>
    </div>
</x-layout>
