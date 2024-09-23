<div class="flex items-center justify-center min-h-screen">
    <div class="bg-blueLight p-8 shadow-lg max-w-lg w-full">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="notes" class="block text-white font-semibold mb-2">Catatan</label>
                <input type="text" id="notes" name="notes" class="w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                 <label for="tindaklanjut" class="block text-white font-semibold mb-2">Tindak Lanjut</label>
                 <input type="text" id="tindaklanjut" name="tindaklanjut" class="bg-white w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                 <label for="duedate" class="block text-white font-semibold mb-2">Due Date</label>
                 <input type="date" id="duedate" name="duedate" class="w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                 <label for="pic" class="block text-white font-semibold mb-2">PIC</label>
                 <input type="text" id="pic" name="pic" class="w-full p-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="flex justify-end">
                 <button type="submit" class="px-4 py-2 bg-white text-blue font-bold rounded-full shadow hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Save
                 </button>
            </div>
        </form>
    </div>
</div>
