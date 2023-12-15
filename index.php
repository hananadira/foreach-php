<?php
    $dates = [
        [
            "name"=> "Hana Nadira Savaira",
            "age"=> "16",
            "jurusan"=> "PPLG",
            "image"=> "img/mark (1).jpg"
        ],
        [
            "name"=> "Siti Lubna Salsabila Muslimah",
            "age"=> "16",
            "jurusan"=> "PPLG",
            "image"=> "img/ais on Twitter.jpeg"
        ],
        [
            "name"=> "Fania Nirmala",
            "age"=> "16",
            "jurusan"=> "PPLG",
            "image"=> "img/jisung.jpeg"
        ]
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #bbbdd4;
        text-align: center;
    }
    ul {
        list-style: none;
    }
    li {
        background-color: white;
        padding: 10px;
        border-radius: 90px;
        margin: 50px;
        padding-left: 50px;
        padding-right: 50px;
    }

        a:link, a:visited {
    background-color: white;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }

    a:hover, a:active {
    background-color: skyblue;
    }
</style>
<body>
    <h1>DAFTAR BIODATA SISWA</h1>
    <?php foreach ($dates as $date) : ?>
        <ul>
            <li><a href="data.php?name=<?= $date ["name"] ?>&
            age= <?= $date ["age"] ?>&
            jurusan= <?= $date ["jurusan"] ?>&
            image= <?= $date ["image"]?>"><?= $date ["name"] ?></a></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>
