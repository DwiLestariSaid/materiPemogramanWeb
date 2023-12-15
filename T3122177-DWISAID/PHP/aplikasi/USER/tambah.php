<?php
include "../function.php";

if (isset($_POST['simpan'])) {
    if (insertDataUser($_POST) > 0){
        echo
        "
        <div class='alert alert-success' role='alert'> Data Mahasiswa Berhasil di Simpan!</div>
        <script>
        setTimeout(function(){
            document.location='index.php'
        },1000);
        </script>
        ";
    } else {
        echo
        "
        <div class='alert alert-success' role='alert'> Data Mahasiswa Gagal di simpan!</div>
        <script>
        setTimeout(function(){
            document.location='index.php
        },1000);
        </script
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Tambah Data</title>
<!-- css bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah Data</h4>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nm_user" class="form-label">* Nama User</label>
                                        <input type="text" name="nm_user" class="form-control"placeholder="Masukkan nama user..." required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">* Password</label>
                                            <input type="text" name="password" class="form-control"placeholder="Masukkan password..." required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="form-label">* Status</label>
                                            <select name="status" class="form-control" required>
                                                <option value="" selected> - Pilih</option>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak"> Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nm_lengkap" class="form-label">* Nama Lengkap</label>
                                        <input type="text" name="nm_lengkap" class="form-control"placeholder="Masukkan nama lengkap..."required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="role" class="form-label">* Role</label>
                                        <select name="role" class="form-control" required>
                                            <option value="" selected> - Pilih</option>
                                            <option value="Admin">Administrator</option>
                                            <option value="User"> User</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="form-label">* Foto User</label>
                                        <input type="file" name="foto" class="form-control">
                                        <div class="form-text">Format : JPG/JPEG/PNG : 2Mb</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"name="simpan">Simpan</button>
                                <button type="button" class="btn btn-success"onclick="document.location='index.php'">Kembali</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script >src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
        
</body>
</html>
