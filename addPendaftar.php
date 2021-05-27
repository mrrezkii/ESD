<?php

$name = $_POST['name'];
$umur = $_POST['umur'];
$domisili = $_POST['domisili'];
$status = $_POST['status'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Domisili</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?= $name; ?></th>
                    <td><?= $umur; ?></td>
                    <td><?= $domisili; ?></td>
                    <td><?= $status; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <a href="index.php" class="btn btn-dark">Back</a>
    </div>
</body>

</html>