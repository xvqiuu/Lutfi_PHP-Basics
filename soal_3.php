<!DOCTYPE html>
<body>
    <?php
    $nama_depan = "Lutfi";
    $list_kota = array(
        "Lampung",
        "Riau",
        "Jambi",
        "Bengkulu",
        "Makassar",
        "Kendari",
        "Gorontalo",
        "Samarinda",
        "Papua",
        "Nusa Tenggara Barat"
    );
    $default_kota = "Jawa Timur";

    //nama_depan diubah menjadi array
    $array_nama = str_split($nama_depan);
    
    //mengubah setiap huruf dalam array_nama menjadi hururf kapital
    foreach ($array_nama as $huruf) {
        $huruf = strtoupper($huruf);
        $kota_penempatan = false;
        
        //pengecekan nama dengan list_kota
        foreach ($list_kota as $k) {
            $hurufPertamaKota = strtoupper(substr($k, 0, 1));

            if ($huruf == $hurufPertamaKota) {
                $default_kota = $k;
                $kota_penempatan = true;
                break;
            }
        }

        if ($kota_penempatan) {
            break;
        }
    }

    echo "Nama Anda : " . $nama_depan . "<br>";
    echo "Anda ditugaskan di kota : " . $default_kota;
    ?>

</body>
</html>