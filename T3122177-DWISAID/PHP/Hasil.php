<?php
// menampilkan hasil input
$nama = $_POST['namaMahasiswa'];
$nilaiMahasiswa = $_POST['nilaiMahasiswa'];

// hitung nilai

if ($nilaiMahasiswa > 75) {
    $Keterangan = "Selamat Anda Lulus";
} else {
    $Keterangan = "Maaf Anda Gagal";
}

// menampilkan
echo "Hasil Perhitungan Nilai Mahasiswa<br>";
echo "Nama Mahasiswa : $nama<br>";
echo "Nilai Mahasiswa : $nilaiMahasiswa<br>";
echo "Keterangan : $Keterangan<br>";