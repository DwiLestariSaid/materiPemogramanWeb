<?php
include "../functions.php";
$idUser = $_GET['id'];
$user = getAll("SELECT * FROM tbl_user WHERE id_user ='$idUser'")[0];
if (isset($_POST['ubah'])) {
    if (updateDataUser($_POST) > 0) {
        echo "<div class='alert alert-success' role='alert'>
        Data User Berhasil di Rubah!
        </div>
        <script>
            setTimeout(function(){
                document.location='index.php'
                },1000);
        </script>";
    } else {
        echo "<div class='alert alert-danger' role='alert'> 
        Data User Gagal di Rubah!
        </div>
        <script>
            setTimeout(function(){
                document.location='index.php'
                },1000);
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Rubah Data</title>`
    <!-- css bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Rubah Data</h4>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>"class="form-control">
                                <input type="hidden" name="foto_lama" value="<?= $user['foto_user']; ?>"class="form-control">
                                <input type="hidden" name="pass_lama" value="<?= $user['pass_user']; ?>"class="form-control">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nm_user" class="form-label">* Nama User</label>
                                        <input type="text" name="nm_user" value="<?= $user['nm_user']; ?>"class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="text" name="password" class="form-control"placeholder="Masukkan password baru...">
                                        <div class="form-text">Jika ingin menganti password, silahkan input password!</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">* Status</label>
                                        <select name="status" class="form-control" required>
                                            <option value="" selected> - Pilih</option>
                                            <option value="Aktif" <?= $user['status_user'] == 'Aktif' ?'Selected' : ''; ?>>Aktif</option>
                                            <option value="Tidak" <?= $user['status_user'] == 'Tidak' ?'Selected' : ''; ?>> Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nm_lengkap" class="form-label">* Nama Lengkap</label>
                                        <input type="text" name="nm_lengkap" value="<?=$user['nm_lengkap_user']; ?>" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="role" class="form-label">* Role</label>
                                        <select name="role" class="form-control" required>
                                            <option value="" selected> - Pilih</option>
                                            <option value="Admin" <?= $user['role_user'] == 'Admin' ?'Selected' : ''; ?>>Administrator</option>
                                            <option value="User" <?= $user['role_user'] == 'User' ? 'Selected': ''; ?>> User</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <img src="../assets/img/<?= $user['foto_user'] ?>" class="rounded-circle img-thumbnail mb-1" style="width:70px">
                                        <label for="foto" class="form-label">Foto User</label>
                                        <input type="file" name="foto" class="form-control">
                                        <div class="form-text">Jika ingin menganti foto, silahkan pilih foto!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary"name="ubah">Simpan</button>
                                    <button type="button" class="btn btn-success"onclick="document.location='index.php'">Kembali</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>