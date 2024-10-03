<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 p-4 bg-blueLight">
        @livewire('sidebar')
    </div>

    <!-- Konten Utama (Form dan Tabel) -->
    <div class="w-3/4 max-w-4xl mx-auto p-6 bg-blue-100 rounded-md shadow-md mt-6">
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
            <button type="submit" class="bg-blueLight py-1 px-4 rounded-md w-auto text-white font-semibold mt-1 mb-2">
                Save
            </button>
        </form>

        <!-- Tabel -->
        <div class="overflow-x-auto">
            <div class="border-b-1 border-r-1 border-l-1 mt-4">
                <table class="min-w-full bg-white border border-gray-200 shadow-lg rounded-lg">
                    <thead class="bg-blueLight">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">No</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Dokumen</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Keterangan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-100 divide-y divide-gray-150">
                        @foreach($documents as $document)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-poppins">{{ $loop->index + 1 }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-poppins">{{ $document['name'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-poppins">{{ $document['description'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="bg-green hover:bg-green-700 text-white font-semibold py-1 px-4 rounded">Edit</button>
                                <button class="bg-red hover:bg-red-700 text-white font-semibold py-1 px-4 rounded">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4">
            <a href="/uploaddokumen"  class="bg-blueLight py-1 px-3 rounded-md w-auto text-white font-semibold">
                {{ __('Upload Dokumenmu Disini') }}
            </a>
        </div>
    </div>
</div>
