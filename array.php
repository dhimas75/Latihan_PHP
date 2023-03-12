<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    
    <?php

        $bilPrima = array (1, 2, 3, 5, 7);
        echo $bilPrima [0], '&nbsp'; //Menampilkan 1
        echo $bilPrima [3] , '&nbsp'; //Menampilkan 
        echo $bilPrima [1] + $bilPrima[2], '&nbsp'; //Menampilkan 5
        echo $bilPrima [1 + 3], '<br><br>'; //Menampilkan 7

        $bilPrima [] = 11; //Menambahkan elemen baru pada akhir array.
        print_r($bilPrima); //Fungsi print_r adalah untuk menampilakn seluruh elemen dari suatu array.

        echo '<br><br>';

        $bilPrima [5] = 13; //Mengubah nilai dari isi elemen array ke 5 dari 11 menjadi 13.
        print_r($bilPrima);

        echo '<br><br>';

        unset($bilPrima[3]); //Fungsi unset() adalah untuk menghapus dari isi sebuah element array
        print_r($bilPrima);

        echo '<br><br>';

        $genap = array();
        $genap[] = 2; $genap[] = 4; $genap[] = 6;
        print_r($genap);

        echo '<br><br>';

        $data = array('Dhimas', 19, '30C', 3.68);
        $data = true;
        print_r($data);

    ?>

</body>
</html>