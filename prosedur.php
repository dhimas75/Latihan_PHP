<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosedur</title>
</head>
<body>
    
    <?php
    
    //Membuat fungsi
    echo "Membuat fungsi<br><br>";

    function perkenalan(){
        echo "Selamat siang, <br/>";
        echo "Perkenalkan, nama saya Dhimas N A<br/>";
        echo "Senang berkenalan dengan teman-teman semua<br/>";
    }
    
    // memanggil fungsi yang sudah dibuat
    perkenalan();
    
    echo "<br>";
    
    // kita dapat memanggilnya lagi
    perkenalan();

    echo "<br><hr><hr><br>";

    //Fungsi dengan Parameter
    echo "Fungsi dengan Parameter<br><br>";

    function kenalan($nama, $salam){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan teman-teman semua<br/>";
      }
      
      // memanggil fungsi yang sudah dibuat
      kenalan("Dhimas N A", "Halo");
      
        echo "<br>";
      
        $saya = "Aprilia";
        $ucapanSalam = "Selamat pagi";

        // memanggilnya lagi
        kenalan($saya, $ucapanSalam);

        echo "<br><hr><hr><br>";

        //Fungsi Paramter dengan Nilai Default
        echo "Fungsi Paramter dengan Nilai Default<br><br>";

        // mmbuat fungsi
        function kenalankan($name, $Salam="Assalamualaikum"){
            echo $Salam.", ";
            echo "Perkenalkan, nama saya ".$name."<br/>";
            echo "Senang berkenalan dengan teman-teman semua<br/>";
        }
        
        // memanggil fungsi yang sudah dibuat
        kenalankan("Muhardian", "Hai");
        
        echo "<br>";
        
        $aku = "Indry";
        $ucapan_Salam = "Selamat pagi";
        // memanggilnya lagi tanpa mengisi parameter salam
        kenalankan($aku);

        echo "<br><hr><hr><br>";

    //Fungsi didalam fungsi
    echo "Fungsi dalam fungsi<br><br>";

    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
      }
      
      function memperkenalkan($Nama_baru, $salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$Nama_baru."<br/>";

        // memanggil fungsi lain
        echo "Saya berusia ". hitungUmur(1945, 2023) ." tahun<br/>";
        echo "Senang berkenalan dengan teman-teman semua<br/>";
      }
      
      // memanggil fungsi memperkenalkan
      memperkenalkan("Mita");

      echo "<br><hr><hr><br>";

    ?>

    <!-- Penjelasan -->

    Fungsi adalah sekumpulan intruksi yang dibungkus dalam sebuah blok.
    Fungsi dapat digunakan ulang tanpa harus menulis ulang instruksi di dalamnya.

    - Fungsi pada PHP dapat dibuat dngan kata kunci function, lalu diikuti dengan
    nama fungsinya Kode intruksi dapat di tulis di dalam kurung kurawal ({...}). 
    contohnya :
    (function namaFungsi(){
      //intruksi ada disini
    })

    Fungsi yang sudah dibuat tidak akan menghasilkan apapun kalau tidak dipanggil.
    Kita dapat memanggil fungsi dengan menuliskan namanya.

    - Fungsi dengan parameter, adalah fungsi yang kita bisa  memasukkan sebuah nilai ke dalam fungsi.
    Nilai tersebut akan diolah di dalam fungsi.
    sehingga kita bisa mengubah isi dari fungsi melalui parameternya.

    - Fungsi Paramter dengan Nilai Default, adalah fungsi yang mana Nilai default berfungsi untuk mengisi
    nilai sebuah parameter, kalau parameter tersebut tidak diisi nilainya.

    Misalnya: kita lupa mengisi parameter salam, maka program akan error. Oleh karena itu, kita perlu
    memberikan nilai default supaya tidak error.

    - Fungsi didlm fungsi, kita juga bisa bikin yang sudah kita buat, dapat juga dipanggil di dalam fungsi lain,
    jadi fungsi hitung umur dapat dipanggil didlm fungsi perkenalan.


</body>
</html>