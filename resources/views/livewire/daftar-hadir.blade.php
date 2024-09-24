<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 p-4 bg-blueLight">
        @livewire('sidebar')
    </div>
    
    <!-- Konten Utama -->
    <div class="w-3/4 bg-blueLight p-8 shadow-lg max-w-full ml-4 rounded-md mt-4">
        <h2 class="text-center text-white mt-1 font-semibold">Daftar Hadir Peserta Rapat</h2>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-1">
                <label for="tanggal" class="block font-semibold mb-1 text-white">Masukkan Tanggal Rapat</label>
                <input type="date" id="tanggal" name="tanggal" class="w-full p-1 rounded border border-white focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-1">
                 <label for="tempat" class="block font-semibold mb-1 text-white">Acara</label>
                 <input type="text" id="tempat" name="tempat" class="w-full p-1 rounded border border-white focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
        </form>
        <button type="submit" class="bg-white py-1 px-4 rounded-md w-auto text-blue font-semibold mt-1 mb-1">
            Save
        </button>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border mt-1">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($peserta as $index => $person)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $person['nama'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $person['jabatan'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-green hover:bg-green-700 text-white font-bold py-1 px-4 rounded">Hadir</button>
                            <button class="bg-red hover:bg-red-700 text-white font-bold py-1 px-4 rounded">Tidak Hadir</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-8">
            <a href="/tambahanggota"  class="bg-white py-1 px-3 rounded-md w-auto text-blue font-semibold">
                {{ __('Tambah Peserta Rapat') }}
            </a>
        </div>
    </div>
</div>
