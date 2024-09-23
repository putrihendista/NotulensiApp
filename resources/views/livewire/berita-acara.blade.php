<div>
    <div class="bg-blueLight p-8 shadow-lg max-w-full w-full">
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
        <button type="submit" class="bg-white py-1 px-4 rounded-md w-auto text-blue font-semibold mt-1 mb-2">
            save
        </button>
        <div>
        <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dokumen</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($documents as $document)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $loop->index + 1 }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $document['name'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $document['description'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <button class="bg-green hover:bg-green-700 text-white font-bold py-1 px-4 rounded">Edit</button>
                    <button class="bg-red hover:bg-red-700 text-white font-bold py-1 px-4 rounded">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
            <button class="bg-white py-1 px-3 rounded-md w-auto text-blue font-semibold mt-8">
                    {{ __(' Upload Dokumenmu Disini') }}
            </button>      
    </div>
</div>
