<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
</head>
<style>
    body {
        background-color: #bbbdd4;
    }
    h1 {
        text-align: center;
        font-family: sans-serif;
    }
    hr {
        margin-left: 140px;
        margin-right: 140px;
    }
    li {
        list-style: none;
        font-size: 25px;
    }
    img {
        width: 280px;
        border-radius: 30px;
    }
</style>
<body>
    <h1>BIODATA SISWA</h1> <hr>
    <ul>
        <li>Nama : <?= $_GET["name"] ?></li>
        <li>Age : <?= $_GET["age"] ?></li>
        <li>Jurusan : <?= $_GET["jurusan"] ?></li>
        <li>Image : <img src="<?= $_GET["image"]?>" alt=""></li>
    </ul>

    <a href="index.php">Kembali ke halaman utama</a>
</body>
</html>