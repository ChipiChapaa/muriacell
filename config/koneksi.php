<?php
$koneksi = mysqli_connect("db","muriacell","muriacell","muriacell");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>
