<!DOCTYPE html>
<body>
    <?php

    //array yang berisi setiap anggota dan memiliki atribut nama dan nim 
    $group_member = array(
        array("Nama" => "Lutfi Lisana Shidqi", "NIM" => "505926"),
        array("Nama" => "Marwah Kamila Ahmad", "NIM" => "506193"),
        array("Nama" => "Ghita Najmi Naqasy", "NIM" => "490771"),
        array("Nama" => "Hayya Fatihatus Zahra", "NIM" => "505168"),
        array("Nama" => "Ajeng Cerelia Evin", "NIM" => "493909"),
    );

    foreach ($group_member as $key => $member) {
        $name = $member["Nama"];
        $nim = $member["NIM"];

        if ($key == 0) {
            $peran = "Project Manager";
        }
        elseif ($nim % 2 == 0) {
            $peran = "Back-end Developer";
        } 
        else {
            $peran = "Front-end Developer";
        }

        echo "Nama: " . $name . "<br>";
        echo "NIM: " . $nim . "<br>";
        echo "Peran: " . $peran . "<br><br>";
    }
    ?>
</body>
</html>