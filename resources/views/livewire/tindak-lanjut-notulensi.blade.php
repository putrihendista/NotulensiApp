<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 p-4 bg-blueLight min-h-screen">
        @livewire('sidebar')
    </div>
    <!-- Konten Utama -->
    <div class="w-3/4 max-w-4xl mx-auto mt-4 p-2">
        <div>
            <button class="px-4 py-2 bg-blueLight text-white rounded font-semibold mt-4">Tambah</button>
        </div>
        <div class="max-w-4xl mx-auto mt-4 p-6 bg-blue rounded-lg shadow-md">
            <div>
                <h2 class="text-lg font-bold text-center">Rencana Tindak Lanjut</h2>
            </div>

            <table class="min-w-full bg-white mt-3">
                <thead>
                    <tr class="bg-blueLight text-white">
                        <th class="w-1/12 py-3">No</th>
                        <th class="w-3/12 py-3">Catatan</th>
                        <th class="w-4/12 py-3">Tindak Lanjut</th>
                        <th class="w-2/12 py-3">Due Date</th>
                        <th class="w-2/12 py-3">PIC</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rencanaTindakLanjut as $index => $item)
                    <tr class="border-b">
                        <td class="text-center py-3">{{ $index + 1 }}</td>
                        <td class="text-center py-3">{{ $item['catatan'] }}</td>
                        <td class="text-center py-3">{{ $item['tindak_lanjut'] }}</td>
                        <td class="text-center py-3">{{ $item['due_date'] }}</td>
                        <td class="text-center py-3">{{ $item['pic'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
