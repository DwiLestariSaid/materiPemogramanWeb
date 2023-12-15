<?php
require '../function.php';
$mhs = getAll("SELECT * FROM tbl_mahasiswa order by id asc");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
               <div class="card">
                    <div class="card-body">
                        <h4>Data Mahasiswa</h4>
                        <a href="tambah.php" class="btn btn-primary my-3">Tambah data mahasiswa</a>
                        <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>e-Mail</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($mhs as $dMhs) :       ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $dMhs['nim']; ?></td>
                            <td><?= $dMhs['nama']; ?></td>
                            <td><?= $dMhs['jurusan'] ?></td>
                            <td><?= $dMhs['email'] ?></td>
                            <td>
                                <a href="rubah.php?id=<?= $dMhs['id'] ?>" type="button" class="btn btn-dark">Edit</a>
                                <a href="hapus.php?id=<?= $dMhs['id'] ?>" type="button" class="btn btn-danger">Hapus</a>
                             
                            </td>
                        </tr>
                 <?php endforeach; ?>
                 </tbody>
                </table>
                    </div>
               </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>