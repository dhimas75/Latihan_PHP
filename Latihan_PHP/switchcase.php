<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwitchCase IfElse</title>
</head>
<body>

<?php
    //Switch Case

    $favcolor = "Red";
    switch ($favcolor){
        case "Red";
            echo "Your Favorite Color is Red!";
            break;

        case "Blue";
            echo "Your Favorite Color is Blue!";
            break;

        case "Green";
            echo "Your Favorite Color is Green!";
            break;

        default;
            echo "Your Favorite Color is Neither Red, Blue, or Green!";
    }

    echo "<hr><br>";

    //If-Else

    $teman = "Dhimas";
    if($teman == "Dika"){
        echo "Dia adalah Teman Saya";
    }else{
        echo "Dia Bukan Teman Saya";
    }

    echo "<br>";

    //If-Elseif-Else

    $nama = "Dhimas";
    if($nama == "Andi"){
        echo "Dhimas Adalah Nama Saya";
    }elseif($nama == "Andi"){
        echo "Andi Adalah Nama Saya";
    }else{
        echo "Saya Lupa Nama Saya";
    }
?>

<!-- Catatan -->

SwitchCase dan IF Else hampir sama sifungsinya bwt nentuin kaya pilihannya.
lebih detailnya kalo switch case digunain bwt pernyataan pilihan ganda,
jadi untuk memeriksa kebenaran setiap nilai yg dimiliki, nilai yg diperiksa
itu pada bagian "CASE" (ganti tulisan RED di case) maka hasilnya akan ke default karena pengujian pada switchcase
juga case sensitif (besar kecilnya huruf).

kalo bwt kondisi if else itu bwt memeriksa seuatu nilai bwt melakukan aksi, jadi nilai yg diperiksa itu pd bagian variabel (variabel teman)
ada yg sesuai gak? kalo gak ada maka bakal munculin jawaban yg di else

kalo yg ef elseif else sama aja cuma kalo kondisi ef diawal gak cocok maka masih ada pilihan lain sebelum ke else dan untuk jumlah
ElseIf tidak terdapat minimal atau maksimal.

</body>
</html>