<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 p-4 bg-blueLight">
        @livewire('sidebar')
    </div>
    
    <!-- Konten Utama -->
    <div class="w-3/4 max-w-4xl mx-auto p-6 bg-blue-100 rounded-md shadow-md mt-6">
        <h2 class="text-center text-black mt-1 font-semibold">Daftar Hadir Peserta Rapat</h2>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-1">
                <label for="tanggal" class="block font-semibold mb-1 text-black">Masukkan Tanggal Rapat</label>
                <input type="date" id="tanggal" name="tanggal" class="w-full p-1 rounded border border-black text-black focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-1">
                 <label for="tempat" class="block font-semibold mb-1 text-black">Acara</label>
                 <input type="text" id="tempat" name="tempat" class="w-full p-1 rounded border border-black focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
        </form>
        <button type="submit" class="bg-blue py-1 px-4 rounded-md w-auto text-white font-semibold mt-1 mb-1">
            Save
        </button>

        <div class="overflow-x-auto">
            <div class="border-b-1 border-r-1 border-l-1 mt-4">
                <table class="min-w-full bg-white border border-gray-200 shadow-lg rounded-lg">
                    <thead class="bg-blueLight">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Jabatan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-100 divide-y divide-gray-150">
                        @foreach ($peserta as $index => $person)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $person['nama'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $person['jabatan'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="bg-green hover:bg-green-700 text-white font-semibold py-1 px-4 rounded">Hadir</button>
                                <button class="bg-red hover:bg-red-700 text-white font-semibold py-1 px-4 rounded">Tidak Hadir</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4">
            <a href="/tambahanggota"  class="bg-blue py-1 px-3 rounded-md w-auto text-white font-semibold">
                {{ __('Tambah Peserta Rapat') }}
            </a>
        </div>
    </div>
</div>
