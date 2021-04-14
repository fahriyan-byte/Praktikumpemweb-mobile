<?php
require("sambung.php");
$id_pegawai = $_GET["update"];
$data = show("SELECT * FROM pegawai WHERE id_pegawai = $id_pegawai");
if (isset($_POST["ubah"])) {
    if (update($_GET > 0)) {
        echo "<script>
            alert('Data Berhasil Diupdate Di data Pegawai');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Diupdate');
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
    <title>Update</title>
</head>
<body>
    <a href="index.php">home</a>
    <form action="" method="POST">
        <?php
        foreach ($data as $dt) {
        ?>
          <p>
                    <label for="id_pegawai">id_pegawai</label>
                    <input type="text" name="id_pegawai" id="id_pegawai" value=<?php echo $dt["id_pegawai"]; ?> readonly>
        </p>
                    <label for="nama">nama</label>
                    <input type="text" name="nama" id="nama" value=<?php echo $dt["nama"]; ?>>
        <p>     
                    <label for="id_departement">id_departement</label>
                    <input type="text" name="id_departement" id="id_departement" value=<?php echo $dt["id_departement"]; ?>>
        </p>       
                    <button type="submit" name="ubah">update</button>
            
        <?php
        }
        ?>
    </form>
</body>
</html>