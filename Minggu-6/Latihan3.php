<?php
    $data = array("Lanirne","Aduh","Qifuat","Toda","Anevi","Samid","Kifuat");
    echo "Data awal : ";
    for ($i=0; $i < 7 ; $i++) {
        echo $data[$i];
        echo ", ";
    }
    sort($data);
    echo "<br><br>";
    echo "Data setelah di urutkan : ";
    for ($i=0; $i < 7 ; $i++) {
        echo $data[$i];
        echo ", "; 
    }
?>