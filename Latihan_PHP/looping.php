<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lopping</title>
</head>
<body>

    <?php
    
        //Perualangan For
        echo "<h3>Ini perulangan For</h3>";

        for($x = 0; $x < 10; $x++){
            echo "<p>Perulangan ke-$x</p>";
        }

        echo '<hr>';

        //Perulangan While
        echo "<h3>Ini perulangan While</h3>";

        $y = 0;
        
        while($y < 10){
            
            echo "<p>Perulangan ke-$y</p>";
            $y++;
        }

        echo '<hr>';

        //Perulangan While Do
        echo "<h3>Ini perulangan While</h3>";

        $z = 10;

        do {
            echo "<p>Perulangan ke-$z</p>";
            $z--;
        } while ($z > 0);

        echo '<hr>';

        //Perualangan Foreach
        echo "<h3>Ini perulangan Foreach</h3>";

        $jurusan = [
            "Teknik Informatika",
            "Sistem Informasi",
            "DKV",
            "Akutansi"
        ];

        echo "<h5>Jurusan yang ada di kampus :</h5>";
        echo "<ul>";
        foreach($jurusan as $fakultas){
            echo "<li>$fakultas</li>";
        }
        echo "</ul>";
    
    ?>

    <!-- Catatan -->

    1. Perulangan For adalah perulangan yang termasuk dalam counted loop atau perulangan yang sudah jelas
    berapa banyak perulangannya, karena kita bisa menentukan jumlah perulangannya, sebagai contoh disini
    kita deklarasi variabel $x, yang value awalnya dimulai dari 0, nilai perulangannya kita tentukan yaitu
    tidak lebih besar dari 10, dan diakhir arti dari $x++ adalah setiap perulangan 1x maka akan ditambah 1.

    2. Perulangan while adalah perulangan yang termasuk dalam uncounted loop.
    Karena biasanya digunakan untuk mengulang sesuatu yang belum jelas jumlah pengulangannya.
    tapi while bisa juga digunain kaya perulangan for (counted loop), diperulangan ini bakal
    ngulang terus nilai dari variabel %y sampe lebih kecil dari 10 caranya sama kaya tadi.
    Struktur perulangan while adalah akan mengecek kondisi terlebih dahulu, baru melakukan pengulangan.
    <!-- (<?php

    while (<kondisi>){
        // blok kode yang akan diulang di sini    
    }

    ?>) -->

    3. Perulangan while do adalah perulangan yang termasuk dalam uncounted loop, perbedaan sama while itu ada di cara mulai pengulangannya Perulangan Do/While akan selalu melakukan pengulangan sebanyak 1 kali, kemudian melakukan pengecekan kondisi.
    <!-- (<?php

    do {
        // blok kode yang akan diulang    
    } while (<kondisi>);
    ?>) -->

    4. Perulangan foreach sama seperti perulangan for. Namun, ia lebih khusus digunakan untuk menampilkan array.
    <!-- (<?php

    foreach($array as $data){
        echo $data;
    }) -->

    // Untuk menambahkan value dari nilai variabel kita bisa menggunakan $nama_variabel++ (Untuk increment / menambahkan 1 nilai setiap sekali perulangan) dan menggunakan $nama_variabel-- (Untuk decreament /  mengurangi 1 nilai untuk setiap sekali perulangan).

    // Jika kita tidak mendeklarasikan value variabel diawal maka sistem bakal error karena gak bisa mendefine atau menentukan nilai dari variabel kita yg akan di looping.

    //Jika kita tidak menambahkan increment atau decreament maka perulangan tidak bakal selesai karena tidak ada penambahan atau pengurangan dari nilai variabel tersebut, jika perulangan yg dilakukan lumayan berat maka bakal bikin devise ngelag karena tidak berhenti" looping.


    
</body>
</html>