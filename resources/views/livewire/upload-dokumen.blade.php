<div class="flex">
    <!-- Sidebar -->
    <div class="w-auto p-4 bg-blueLight">
        @livewire('sidebar')
    </div>

    <!-- konten utama -->
    <div class="max-w-lg mx-auto mt-6">
        <div class="text-left mb-4">
            <h2 class="font-semibold">Upload Dokumenmu Disini</h2>
        </div>
        <div class="bg-blueLight p-6 rounded-md shadow-md max-w-lg mx-auto">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="tempat" class="block text-white font-semibold mb-2">Nama Dokumen</label>
                    <input type="text" id="tempat" name="tempat" class="w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-4">
                    <label for="upload" class="block text-white font-semibold mb-2">Upload Dokumen</label>
                    <input type="file" id="upload" name="upload" class="bg-white w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <button class="bg-white py-1 px-3 rounded-md w-auto text-blue font-semibold mt-4">
                    {{ __('Save') }}
                </button>      
            </form>
        </div>
    </div>
</div>
