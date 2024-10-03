<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 p-4 bg-blueLight min-h-screen">
        @livewire('sidebar')
    </div>
    <!-- Konten Utama -->
    <div class="w-3/4 max-w-4xl mx-auto mt-4 p-2">
        <div>
            <a href="/tambahtindakLanjut" class="bg-blueLight py-1 px-3 rounded-md w-auto text-white font-semibold">
                {{ __('Tambah') }}
            </a>
        </div>
        <div class="max-w-4xl mx-auto mt-4 p-6 bg-blue rounded-lg shadow-md">
            <div>
                <h2 class="text-lg font-bold text-center text-white">Rencana Tindak Lanjut</h2>
            </div>

            <table class="min-w-full table-auto bg-white mt-3">
                <thead>
                    <tr class="bg-blueLight text-white">
                        <th class="w-1/12 py-3 text-center font-semibold">No</th>
                        <th class="w-3/12 py-3 text-left px-4 font-semibold">Catatan</th>
                        <th class="w-4/12 py-3 text-left px-4 font-semibold">Tindak Lanjut</th>
                        <th class="w-2/12 py-3 text-center font-semibold">Due Date</th>
                        <th class="w-2/12 py-3 text-center font-semibold">PIC</th>
                        <th class="w-2/12 py-3 px-8 text-center font-semibold">Keterangan</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($rencanaTindakLanjut as $index => $item)
                    <tr class="border-b">
                        <td class="text-center py-3 font-poppins">{{ $index + 1 }}</td>
                        <td class="text-left py-3 px-4 font-poppins">{{ $item['catatan'] }}</td>
                        <td class="text-left py-3 px-4 font-poppins">{{ $item['tindak_lanjut'] }}</td>
                        <td class="text-center py-3 font-poppins">{{ $item['due_date'] }}</td>
                        <td class="text-center py-3 font-poppins">{{ $item['pic'] }}</td>
                        <td class="text-center py-3">
                            @if($item['status'] === 'selesai')
                            <button wire:click="toggleStatus({{ $index }})" class="bg-green text-white px-4 py-1 rounded-md text-sm font-semibold">Selesai</button>
                            @else
                            <button wire:click="toggleStatus({{ $index }})" class="bg-red text-white px-4 py-1 rounded-md text-sm font-semibold">Belum Selesai</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
