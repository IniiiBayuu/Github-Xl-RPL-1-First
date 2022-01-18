<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<center>
    <form action="" method="post">
        <h2>Program</h2>
        <table>
            <tr>
                <td>1. Program Pengulangan Kelipatan 2</td>
            </tr>
            <tr>
                <td>2. Program Pengulangan Kelipatan 5 x 5</td>
            </tr>
            <tr>
                <td>3. Program Ganjil Genap</td>
            </tr>
            <tr>
                <td>4. Program Pengulangan Kuadrat</td>
            </tr>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="text" name="pilih" /></td>
            </tr>
            <tr>
                <td>Masukkan Angka</td>
                <td>:</td>
                <td><input type="text" name="masuk"></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="KIRIM"></td>
            </tr>
            </table>
         </form>
        </table>
</center>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $pilih = $_POST['pilih'];
    $masuk = $_POST['masuk'];

    if ($pilih == 1) {
        echo "<center>";
        echo "<br>";
        echo "<h3><i>Deret Bilangan Kelipatan 2</i></h3>";
        echo "<br>";
        echo "<br>";
        for ($i= 2; $i <= $masuk; $i=$i+2)
        {
        echo $i;
        echo "<br />";
    }
        echo "</center>";
    }
    elseif ($pilih == 2) {
        echo "<b>3.program ganjil genap</b><br><hr>";
        for($x=5;$x <= $masuk;$x+=5){
            $hasil =$x*5;
            echo "Nilai = $x x 5=$hasil<br>";
        }
    }elseif ($pilih == 3) {
        echo "<b>4.program pengulangan kuadrat</b><br><hr>";
        for ($z=1; $z <= $angka ; $z++) { 
            if (($z%2)==0) {
                echo "Genap=$z<br>";
            }else {
                echo "Ganjil=$z<br>";
            }
        }
    }elseif ($pilih ==4) {
        echo "<b>4.program pengulangan kuadrat</b><br><hr>";
        for ($q=1; $q <=$angka ; $q++) { 
            $hsl=$q*$q;
            echo "$q x $q=$hsl<br>";
        }
    }
}
?>
