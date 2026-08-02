<?php
// Pengenalan Materi
echo("Materi Pengenalan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan</title>
</head>
<body>
    <h1><?php echo("Materi Pengenalan PHP"); ?></h1>
    <?php 
    // String Concatenation
    $namaDepan = "Budi";
    $namaBelakang = "Santoso";
    $umur = 20;
    $tinggiBadan = 170;
    $statusMenikah = false;

    // Cara Pertama
    $namaPanjang = $namaDepan . " " . $namaBelakang;

    // Cara Kedua menggunakan interpolasi string
    $namaPanjang2 = "$namaDepan $namaBelakang";

    // pencarian string
    $kalimat = "ini PHP adalah Bahasa Pemrograman yang mudah dipahami";
    $posisi = strpos($kalimat, "Bahasa");
    $posisiAkhir = strrpos($kalimat, "PHP");

    // Fungsi lain String
    
    // replace
    $kalimatBaru = str_replace("PHP", "React", $kalimat);

    // panjang dari string
    $panjangKalimat = strlen($kalimat);

    // upperCase
    $upperKalimat = strtoupper($kalimat);

    // lowerCase
    $lowerKalimat = strtolower($kalimat);

    // substr
    $subKalimat = substr($kalimat, 0, 15);
    ?>

    <h1><?= $namaPanjang ?></h1>
    <h1><?= $namaPanjang2 ?></h1>
    <h1><?= $posisi ?></h1>
    <h1><?= $kalimatBaru ?></h1>
    <h1><?= $panjangKalimat ?></h1>
    <h1><?= $kalimat ?></h1>
    <h1><?= $upperKalimat ?></h1>
    <h1><?= $lowerKalimat ?></h1>
    <h1><?= $subKalimat ?></h1>

</body>
</html>