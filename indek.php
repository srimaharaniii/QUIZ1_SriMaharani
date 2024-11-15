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
                <form action="indek_pross.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nidn</label>
                        <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Rumpun</label>
                        <select name="rumpun" id="" class="from-control">
                            <option value="">Pilih Rumpun</option>
                            <option value="Komputer">Komputer</option>
                            <option value="Akutansi">Akutansi</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Perpajakan">Perpajakan</option>
                            <option value="Bisnis">Bisnis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal"class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" name="email"class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-info">reset</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>