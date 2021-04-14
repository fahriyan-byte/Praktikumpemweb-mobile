<?php
require("sambung.php");
if (isset($_POST["insert"])) {
    if (insert($_POST > 0)) {
        echo "<script>
            alert('Data Berhasil Dimasukkan');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Dimasukkan');
            document.location.href = 'index.php';
        </script>";
    }
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <a href="index.php">home</a>
    <br>
    <form action="" method="POST">
    </br>
            <p>
                <label for="id_pegawai">id_pegawai : </label>
               <input type="text" name="id_pegawai" id="id_pegawai">
               </p>
        
            <p>
               <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama">
                </p>
        
         
            <p>
                <label for="id_departement">id_departement : </label>
                <input type="text" name="id_departement" id="id_departement">
                </p>
                
          <br>
                <button type="submit" name="insert">insert</button>
          </br>

    </form>
</body>
</html>