<?php
include "../functions.php";

$idUser = $_GET['id'];
if (deleteDataUser($idUser) > 0) {
    echo " <div class='alert alert-success' role='alert'>
    Data User Berhasil di Hapus!
    </div>
    <script>
        setTimeout(function(){
            document.location='index.php'
            },1000);
        </script>
        ";
} else {
    echo "<div class='alert alert-danger' role='alert'>Data User Gagal di Hapus!
    </div>
    <script>
        setTimeout(function(){
            document.location='index.php'
            },1000);
        </script>
        ";
}
?>
<link href="../assets/bootstrap.min.css" rel="stylesheet">
<script src="../assets/bootstrap.bundle.min.js">