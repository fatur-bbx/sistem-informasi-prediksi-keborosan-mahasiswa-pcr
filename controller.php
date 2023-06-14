<?php

include('./koneksi.php');

$nama = $_POST['nama'];
$olshop = $_POST['OnlineShopping'];
$nongkrong = $_POST['nongkrong'];
$MakanDiluar = $_POST['MakanDiluar'];
$topup = $_POST['topup'];
$organisasi = $_POST['organisasi'];
$hasil = "";

if($olshop == "Sering"){
    if($nongkrong == "Jarang"){
        if($MakanDiluar == "Jarang"){
            if($organisasi == "Sering"){
                $hasil = "Boros";
            }else{
                $hasil = "Lumayan Boros"; 
            }
        }else{
            $hasil = "Boros";
        }
    }else if($nongkrong == "Sering"){
        $hasil = "Boros";
    }else{
        $hasil = "Lumayan Boros";
    }
}else if($olshop == "Jarang"){
    if($MakanDiluar == "Jarang"){
        $hasil = "Lumayan Boros";
    }else{
        if($topup == "Sering"){
            $hasil = "Boros";
        }else if($topup == "Jarang"){
            if($organisasi == "Sering"){
                $hasil = "Boros";
            }else{
                $hasil = "Lumayan Boros";
            }
        }else{
            $hasil = "Lumayan Boros";
        }
    }
}else{
    $hasil = "Lumayan Boros";
}

$sql = "INSERT INTO indextable (nama, olshop, nongki, makandiluar, topup, organisasi, hasil) VALUES ('$nama','$olshop','$nongkrong','$MakanDiluar','$topup','$organisasi','$hasil')";

if ($conn->query($sql) === TRUE) {
  echo "Berhasil menambahkan data!<br>
  <a class='btn btn-secondary' href='index.php'>Kembali ke menu utama</a>
  ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}