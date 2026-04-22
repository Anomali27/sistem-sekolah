
<div class="mt-8 space-y-4">
    <!-- Card Header Start -->
    <div class="bg-white shadow p-4 rounded-lg">
        <h1 class="font-bold text-2xl">Tambah Siswa</h1>
        <p class="text-lg">Menambahkan siswa baru ke dalam sistem</p>
    </div>
    <!-- Card Header End -->

    <!-- Card Content Start-->
    <div class="bg-white rounded-lg shadow p-4 my-4">
        <form action="/students" method="POST" class="p-4 grid grid-cols-2 grid-rows-2 gap-4">
            <div class="space-y-2">
                <label class="font-bold block" for="name">Nama</label>
                <input class="px-4 py-2 border rounded-lg w-full" type="text" id="name" name="name"
                    placeholder="Masukkan nama">
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="class">Kelas</label>
                <input class="px-4 py-2 border rounded-lg w-full" type="text" id="class" name="class"
                    placeholder="Masukkan kelas">
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="nis">NIS</label>
                <input class="px-4 py-2 border rounded-lg w-full" type="text" id="nis" name="nis"
                    placeholder="Masukkan NIS">
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="phone_number">No Telepon</label>
                <input class="px-4 py-2 border rounded-lg w-full" type="text" id="phone_number" name="phone_number"
                    placeholder="Masukkan nomor telepon">
            </div>
            <div class="flex justify-end gap-4 py-4 col-span-2">
                <a href="/students" class="font-bold px-4 py-2 rounded-lg bg-gray-100">Kembali</a>
                <button type="submit" class="font-bold rounded-lg px-4 py-2 bg-blue-500 text-white">Simpan</button>
            </div>
        </form>
    </div>
    <!-- Card Content End -->
</div>


