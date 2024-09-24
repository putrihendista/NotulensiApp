<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 p-4 bg-blueLight">
        @livewire('sidebar')
    </div>
    <!-- Konten Form -->
    <div class="w-3/4 max-w-lg mx-auto mt-6">
        <div class="text-left mb-4">
            <h2 class="font-semibold mt-4">Tambah Data Anggota</h2>
        </div>
        <div>
            <form action="">
                <div class="bg-blueLight p-6 rounded-md shadow-md">
                    <div class="mb-4">
                        <label for="name" class="block text-white text-sm font-bold mb-2">Nama</label>
                        <input type="text" id="name" wire:model="name" class="w-full p-2 rounded-md border-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nama lengkap">
                    </div>
                    <div class="mb-4">
                        <label for="job" class="block text-white text-sm font-bold mb-2">Jabatan</label>
                        <input type="text" id="job" wire:model="job" class="w-full p-2 rounded-md border-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Jabatan">
                    </div>
                    <button wire:click="submitForm" class="bg-white text-blue font-semibold mt-2 py-2 px-4 rounded-md hover:bg-blue-600">
                        Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
