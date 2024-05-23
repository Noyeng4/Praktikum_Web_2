<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Daftar Member</title>
    <style>
        body {
            background-color: #e9ecef;
            color: #343a40;
        }

        .list-group {
            margin: 50px auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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

        .btn-primary {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-primary:hover {
            background-color: #138496;
            border-color: #138496;
        }
    </style>
</head>
<body>
    <div class="list-group w-50">
        <h1 class="text-center">Daftar Member</h1>
        <div class="table-responsive">
            <table class="table">
            <tr>
                <td><a href="index.php"><button type="button" class="btn btn-primary">Kembali</button></a></td>
                <td colspan="7"><a href="formMember.php"><button type="button" class="btn btn-primary float-end btn-sm">Tambah Data Baru</button></a></td>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal terakhir Bayar</th>
                <th colspan="2">Opsi</th>
            </tr>
            <?php
            require "koneksi.php";
            require "model.php";
            $result = selectalldata("member");
            while ($data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $data['id_member'] ?></td>
                    <td><?php echo $data['nama_member'] ?></td>
                    <td><?php echo $data['nomor_member'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                    <td><?php echo $data['tgl_mendaftar'] ?></td>
                    <td><?php echo $data['tgl_terakhir_bayar'] ?></td>
                    <td style="text-align: center;"><a href="formMember.php?id_member=<?php echo $data['id_member']; ?>"><button class="btn btn-success btn-sm">Edit</button></a></td>
                    <td style="text-align: center;"><a href="delete_member.php?id_member=<?php echo $data['id_member']; ?>" onclick="return confirm('Hapus Data?')"><button class="btn btn-danger btn-sm">Hapus</button></a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>