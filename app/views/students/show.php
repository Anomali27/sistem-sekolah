
<div class="mt-8 space-y-4">
    <!-- Card Header Start -->
    <div class="bg-white shadow p-4 rounded-lg">
        <h1 class="font-bold text-2xl">Detail Siswa</h1>
        <p class="text-lg">Menampilkan detail siswa yang terdaftar</p>
    </div>
    <!-- Card Header End -->

    <!-- Card Content Start-->
    <div class="bg-white rounded-lg shadow p-4 my-4">
        <div class="p-4 grid grid-cols-2 grid-rows-2 gap-4">
            <div class="space-y-2">
                <label class="font-bold block" for="name">Nama</label>
                <input value="<?= $students['name']?>" class="readonly px-4 py-2 border rounded-lg w-full" type="text" id="name" name="name"
                    placeholder="Masukkan nama">
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="class">Kelas</label>
                <input value="<?= $students['class']?>" class="readonly px-4 py-2 border rounded-lg w-full" type="text" id="class" name="class"
                    placeholder="Masukkan kelas">
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="nis">NIS</label>
                <input value="<?= $students['nis']?>" class="readonly px-4 py-2 border rounded-lg w-full" type="text" id="nis" name="nis"
                    placeholder="Masukkan NIS">
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="phone_number">No Telepon</label>
                <input value="<?= $students['phone_number']?>" class="readonly px-4 py-2 border rounded-lg w-full" type="text" id="phone_number"
                    name="phone_number" placeholder="Masukkan nomor telepon">
            </div>
            <div class="flex justify-end gap-4 py-4 col-span-2">
                <a href="/students" class="font-bold px-4 py-2 rounded-lg bg-gray-100">Kembali</a>
            </div>
        </div>
    </div>
    <!-- Card Content End -->
</div>