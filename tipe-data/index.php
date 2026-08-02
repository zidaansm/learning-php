<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Tipe Data PHP</title>
</head>
<body>

    <?php
        $salam = "Hello there";
        $boolean = false;
        $number = 123;
        $float = 3.62; //float atau double
        $arr = ["a", "b", 3, true];
        $var = null;
    ?>
    <h1><?= gettype($arr) ?></h1>
    <h1><?= var_dump($arr) ?></h1>
    <h1><?= $arr ?></h1>

</body>
</html>