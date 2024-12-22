<x-layout title="History">
    
    <div class="max-w-md my-20">
        <h1 class="text-center text-white font-bold mb-4 text-2xl">History Prediksi Status Mahasiswa</h1>
        
        <div class="relative overflow-x-auto shadow-md rounded-lg mx-4 sm:mx-0">
            @if ($predictionHistory->isNotEmpty())
                <table class="w-full text-sm text-left rtl:text-right bg-gray-300">
                    <thead class="text-xs uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama</th>
                            <th scope="col" class="px-6 py-3">Status Prediksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($predictionHistory as $history)
                            <tr class="bg-white border-b">
                                <td scope="row" class="px-6 py-4">
                                    {{ $history->name }}
                                </td>
                                <td class="px-6 py-4 font-bold">
                                    {{ $history->prediction }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-center text-white">Belum ada data hasil prediksi!</p>
            @endif
        </div>
        <div class="mt-12 flex flex-col items-center justify-center">
            <a href="/">
                <button class="custom-hover-button px-4 py-2 mt-3 text-white rounded-md bg-gray-500">Kembali ke Home</button>
            </a>
        </div>
    </div>

</x-layout>
