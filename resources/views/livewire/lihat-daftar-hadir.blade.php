<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 p-4 bg-blueLight min-h-screen">
        @livewire('sidebar')
    </div>
    <div class="w-3/4 max-w-4xl mx-auto p-6 bg-blue-100 rounded-md shadow-md mt-6">
        <div class="font-semibold mb-2">
            <h2>Daftar Hadir Peserta Rapat</h2>
        </div>
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
        <td class="px-6 py-4 whitespace-nowrap font-poppins">{{ $index + 1 }}</td>
        <td class="px-6 py-4 whitespace-nowrap font-poppins">{{ $person['nama'] }}</td>
        <td class="px-6 py-4 whitespace-nowrap font-poppins">{{ $person['jabatan'] }}</td>
        <td class="px-6 py-4 whitespace-nowrap">
            <button class="bg-green hover:bg-green-700 text-white font-semibold py-1 px-4 rounded">Hadir</button>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
    </div>
</div>
