<!DOCTYPE html>
<html lang="en">
    <meta name="author" content="Adhitya PPT 2172024"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" cellspacing="0" border="1">
    <tr><td colspan="3" align="center" bgcolor="#BADC58">Kalkulator</td></tr>
    <tr><td bgcolor="#69B04C">Angka pertama</td><td><input type="text" value="<?php echo"$_GET[angka1]"; ?>"></td></tr>
    <tr><td bgcolor="#69B04C">Angka kedua</td><td><input type="text" value="<?php echo"$_GET[angka2]"; ?>"></td></tr>
    <tr><td bgcolor="#69B04C">Operator</td><td><input type="text" value="<?php echo"$_GET[operator]"; ?>"></td></tr>
    <tr><td colspan="2" align="center" bgcolor="#BADC58">
        Hasil = <?php
        $angka1 = $_GET["angka1"];
        $angka2 = $_GET["angka2"];
        $operator = $_GET["operator"];
        $hasil;

        if ($operator == "+") {
            echo $hasil = $angka1+$angka2;
        }
        else if ($operator == "-") {
            echo $hasil = $angka1-$angka2;
        } 
        else if ($operator == "*") {
            echo $hasil = $angka1*$angka2;
        }
        else if ($operator == "/") {
            echo $hasil = $angka1/$angka2;
        }
        ?>
        </td></tr>
    </table>
</body>
</html>