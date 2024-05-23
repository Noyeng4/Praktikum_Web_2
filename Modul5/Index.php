<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Menu Index</title>
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

        .list-group-item {
            border: none;
            background-color: #ffffff;
            color: #17a2b8;
            padding: 20px;
            font-size: 18px;
        }

        .list-group-item:hover {
            background-color: #17a2b8;
            color: #ffffff;
            transition: background-color 0.3s, color 0.3s;
        }

        .list-group-item-action.active {
            background-color: #138496;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="list-group w-50">
        <h1 class="text-center">Menu Index</h1>
        <a href="member.php" class="list-group-item list-group-item-action">Member</a>
        <a href="buku.php" class="list-group-item list-group-item-action">Buku</a>
        <a href="peminjaman.php" class="list-group-item list-group-item-action">Peminjaman</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>