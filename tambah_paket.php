<?php
    include "header.php";
    if ($_SESSION['role']!='admin'){ //owner != admin
        echo "<script>alert('Tidak boleh akses'); location.href='home.php';</script>";
    }
   
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Paket</h3>
    <form action="proses_tambah_paket.php" method="post">
        Jenis Paket  :
        <select name="jenis" class="form-control">
            <option></option>
            <option value="kiloan">Laundry Kiloan</option>
            <option value="selimut">Laundry Selimut</option>
            <option value="bed_cover">Laundry Bed Cover</option>
            <option value="kaos">Laundry Kaos</option>
        </select>
        harga : 
        <input type="text" name="harga" value="" class="form-control">
        
        <input type="submit" name="Simpan" value="Tambah paket" class="btn-primary">
       
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>