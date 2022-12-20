<?php
include "connect.php";

$sql = "CREATE TABLE tb_karyawan (
    id_karyawan INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    namaKaryawan VARCHAR(11) NOT NULL,
    alamat VARCHAR(11) NOT NULL,
    noTelp int(11) NOT NULL,
    Jabatan VARCHAR(11) NOT NULL
    )";

if(mysqli_query($conn, $sql)){
    echo "New Table created successfully";
}else{
    echo "Error : ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>