<?php
include('./koneksi.php');
$sql = "SELECT * FROM indextable";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Responden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
    <h1 class="text-center">Data Responden</h1>
    <a href="index.php" class="btn btn-secondary">Kembali ke menu dashboard</a>
    <?php
    $nomor = 1;
    if($result->num_rows > 0) { ?>
        <table class="table">
            <thead>
                <th scope="col">Nomor</th>
                <th scope="col">Nama</th>
                <th scope="col">Online Shopping</th>
                <th scope="col">Nongkrong</th>
                <th scope="col">Makan di Luar</th>
                <th scope="col">Top Up Games</th>
                <th scope="col">Organisasi</th>
                <th scope="col">Hasil</th>
            </thead>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr scope="row">
                    <td>
                        <?= $nomor++;?>
                    </td>
                    <td>
                        <?= $row["nama"];?>
                    </td>
                    <td>
                        <?= $row["olshop"];?>
                    </td>
                    <td>
                        <?= $row["nongki"];?>
                    </td>
                    <td>
                        <?= $row["makandiluar"];?>
                    </td>
                    <td>
                        <?= $row["topup"];?>
                    </td>
                    <td>
                        <?= $row["organisasi"];?>
                    </td>
                    <td>
                        <?= $row["hasil"];?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { 
        echo "0 Results";
    }
    ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>