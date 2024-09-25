<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 p-4 bg-blueLight min-h-screen">
        @livewire('sidebar')
    </div>
    <!-- Tabel -->
    <div class="w-3/4 max-w-4xl mx-auto p-6 bg-blue-100 rounded-md shadow-md mt-6">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dokumen</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-gray-100 divide-y divide-gray-150">
                @foreach($documents as $document)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $loop->index + 1 }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $document['name'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-blue hover:bg-blueLight text-white font-semibold py-1 px-4 rounded">Download</button>
                        <button class="bg-red hover:bg-red-700 text-white font-semibold py-1 px-4 rounded">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>