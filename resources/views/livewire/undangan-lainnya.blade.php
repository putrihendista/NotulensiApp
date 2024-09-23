<div class="container mx-auto px-4">
    <!-- Page Header -->
    <div class="text-center mb-8 mt-8">
        <span class="font-bold text-xl">Undangan Rapat Minggu ini</span>
    </div>

    <!-- Button Container -->
    <div class="flex justify-start mb-6">
        <button class="bg-blueLight hover:bg-blue-600 text-white py-2 px-4 font-semibold rounded-md">
            Upload
        </button>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 mx-auto shadow-lg rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Tanggal</th>
                    <th class="py-3 px-6 text-left">Undangan</th>
                    <th class="py-3 px-6 text-left">Waktu</th>
                    <th class="py-3 px-6 text-left">Tempat</th>
                    <th class="py-3 px-6 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($meetings as $meeting)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">{{ $meeting['date'] }}</td>
                    <td class="py-3 px-6 text-left">{{ $meeting['invitation'] }}</td>
                    <td class="py-3 px-6 text-left">{{ $meeting['time'] }}</td>
                    <td class="py-3 px-6 text-left">{{ $meeting['place'] }}</td>
                    <td class="py-3 px-6 text-left">
                        <button class="bg-blueLight hover:bg-blue-600 text-white py-1 px-3 rounded-md font-semibold">
                            Download
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
