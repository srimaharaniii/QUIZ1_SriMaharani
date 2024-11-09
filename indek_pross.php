<?php
include("koneksi.php");

$nidn = $_POST['nidn'];
$name = $_POST['nama'];
$rumpun = $_POST['rumpun'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$email = $_POST['email'];

$simpan = "INSERT INTO tb_dosen (nidn,nama_lengkap,rumpun,tempat_lahir,tgl_lahir,email) VALUES ('$nidn','$name','$rumpun','$tempat','$tanggal','$email')";

mysqli_query($koneksi,$simpan);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div clas="row mt-">
        <div class="col-6 m-auto">
            <div class="card">
            <div class="card-header text-center">
                <h3>Form Dosen</h3>
            </div>
            <div class="card-body">
            <table class="table">
            <tbody>
                <tr>
                    <td scope="row">Nidn</td>
                    <th>: <?=$nidn?></th>
                </tr>
                <tr>
                    <td scope="row">Nama Lengkap</td>
                    <th>: <?=$name?></th>
                </tr>
                <tr>
                    <td scope="row">Rumpun</td>
                    <th>: <?=$rumpun?></th>
                </tr>
                <tr>
                    <td scope="row">Tempat Lahir</td>
                    <th>: <?=$tempat?></th>
                </tr>
                <tr>
                    <td scope="row">Tanggal Lahir</td>
                    <th>: <?=$tanggal?></th>
                </tr>
                <tr>
                    <td scope="row">Email</td>
                    <th>: <?=$email?></th>
                </tr>
            </tbody>
            </table>
            <a href="indek.php" class="btn btn-warning btn-sm">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>