<!DOCTYPE html>
<body>
    <?php
    //nama panggilan 
    $name = "lisa";

    //tanggal hari ini
    $today = date('d');

    //menghitung jumlah huruf dalam nama panggilan
    $jumlahHuruf = strlen($name);

    //membandingkan jumlah huruf dengan tanggal hari ini
    if ($jumlahHuruf == ($today - 2)) {
        echo "Berhasil";
    } elseif ($jumlahHuruf < $today) {
        echo "Sedikit lagi";
    } else {
        echo "Coba lagi";
    }
    ?> 
</body>
</html>