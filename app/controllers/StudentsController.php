<?php
namespace App\Controllers;

class StudentsController 
{ 
    public function index()
    {
        // Contoh data yang akan dikirim ke view
        $title = "Daftar Siswa";
        $students = ["Andi", "Budi", "Cici"];

        require_once './app/views/students/index.php';
    }
    
    public function create()
    {
        $title = "Tambah Siswa";
        require_once './app/views/students/create.php';
    }

    public function show(string $id)
    {
        $title = "Detail Siswa";
        // Variabel $id ini bisa langsung dipakai di file show.php
        require_once './app/views/students/show.php';
    }
}