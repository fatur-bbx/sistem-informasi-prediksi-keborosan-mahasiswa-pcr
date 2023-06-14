<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>[MASUKKAN JUDUL]</title>
  </head>
  <body>
    <div class="container mt-3">
    <h1 class="text-center">[MASUKKAN JUDUL]</h1>
    <a href="data.php" class="btn btn-secondary">Lihat Data Responden</a>
    <br>
    <br>
    <br>
    <form action="./controller.php" method="POST" class="form-control">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan nama" required class="form-control">
        <br>
        <label for="OnlineShopping" >Online Shopping</label>
        <select name="OnlineShopping" id="OnlineShopping" required class="form-control">
            <option value="">Pilih</option>
            <option value="Sering">Sering</option>
            <option value="Jarang">Jarang</option>
            <option value="Tidak Pernah">Tidak Pernah</option>
        </select>
        <label for="nongkrong" >Nongkrong</label>
        <select name="nongkrong" id="nongkrong" required class="form-control">
            <option value="">Pilih</option>
            <option value="Sering">Sering</option>
            <option value="Jarang">Jarang</option>
            <option value="Tidak Pernah">Tidak Pernah</option>
        </select>
        <label for="MakanDiluar" >Makan Diluar</label>
        <select name="MakanDiluar" id="MakanDiluar" required class="form-control">
            <option value="">Pilih</option>
            <option value="Sering">Sering</option>
            <option value="Jarang">Jarang</option>
        </select>
        <label for="topup" >Top Up Games</label>
        <select name="topup" id="topup" required class="form-control">
            <option value="">Pilih</option>
            <option value="Sering">Sering</option>
            <option value="Jarang">Jarang</option>
            <option value="Tidak Pernah">Tidak Pernah</option>
        </select>
        <label for="organisasi" >Ikut Organisasi/Kepanitiaan</label>
        <select name="organisasi" id="organisasi" required class="form-control">
            <option value="">Pilih</option>
            <option value="Sering">Sering</option>
            <option value="Jarang">Jarang</option>
        </select>
        <br>
        <button type="submit" class="form-control btn btn-secondary">Submit</button>
    </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>