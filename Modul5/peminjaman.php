<?php
require "koneksi.php";
require "model.php";
if (!empty($_GET['id_peminjaman'])) {
    $id_peminjaman = $_GET['id_peminjaman'];
    deletedata("peminjaman", $id_peminjaman, "id_peminjaman");
    header('location:Peminjaman.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Daftar Peminjaman</title>
    <style>
        body {
            background-color: #e9ecef;
            color: #343a40;
        }

        .list-group {
            margin: 50px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        h1 {
            background-color: #198c9e;
            color: #ffffff;
            padding: 20px 0;
            margin: 0;
        }

        .table-responsive {
            padding: 20px;
        }

        table.table {
            margin-bottom: 0;
        }

        .btn-primary,
        .btn-success,
        .btn-danger {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-primary:hover,
        .btn-success:hover,
        .btn-danger:hover {
            background-color: #138496;
            border-color: #138496;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-danger {
            background-color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="list-group w-75">
        <h1 class="text-center">Daftar Peminjaman</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Peminjaman</th>
                        <th>ID Member</th>
                        <th>ID Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th colspan="2">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = selectalldata("peminjaman");
                    while ($data = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $data['id_peminjaman'] ?></td>
                            <td><?php echo $data['id_member'] ?></td>
                            <td><?php echo $data['id_buku'] ?></td>
                            <td><?php echo $data['tgl_pinjam'] ?></td>
                            <td><?php echo $data['tgl_kembali'] ?></td>
                            <td style="text-align: center;"><a href="formPeminjaman.php?id_peminjaman=<?php echo $data['id_peminjaman']; ?>"><button class="btn btn-success btnsm">Edit</button></a></td>
                            <td style="text-align: center;"><a href="peminjaman.php?id_peminjaman=<?php echo $data['id_peminjaman']; ?>" onclick="return confirm('Hapus data?')"><button class="btn btndanger btn-sm">Hapus</button></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
            </table>
            <div class="mt-3">
                <a href="formPeminjaman.php"><button type="button" class="btn btn-primary float-end">Tambah Peminjaman Baru</button></a>
                <a href="index.php"><button type="button" class="btn btn-primary">Kembali</button></a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>