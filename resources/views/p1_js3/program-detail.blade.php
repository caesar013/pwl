<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
</head>
<body>
    <?php
    switch($name){
        case 'karir':
            echo 'Selamat Datang di Program Karir';
            break;
        case 'magang':
            echo 'Selamat Datang di Program Magang';
            break;
        case 'kunjungan-industri':
            echo 'Selamat Datang di Program Kunjungan Industri';
            break;
        default:
            echo 'Program tidak ditemukan';
    }
    ?>
</body>
</html>