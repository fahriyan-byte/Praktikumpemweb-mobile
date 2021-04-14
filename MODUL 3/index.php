<?php
require("sambung.php");
$data = show("SELECT * FROM pegawai");
if (isset($_GET["delete"])) {
    if (delete($_GET > 0)) {
        echo "<script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Dihapus');
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
    <title>Data pegawai</title>
    <link rel="stylesheet" type="text/css" href="syle.css">
</head>
<body align="center">
    <h1 align="center"> Data Pegawai</h1>
    
        
    </form>
    <table border="1" align="center" >
    
        <tr>
      
           <td bgcolor=yellow>id_pegawai</td>
            <td bgcolor=yellow>nama</td>
            <td bgcolor=yellow>id_departement</td>
            <td bgcolor=yellow>pilihan</td>
        </tr>
      

    
        <?php
        foreach ($data as $dt) {
        ?>
            <tr>
                <td><?php echo $dt["id_pegawai"]; ?></td>
                <td><?php echo $dt["nama"]; ?></td>
                <td><?php echo $dt["id_departement"]; ?></td>
                <td>
                    <form action="" method="GET">
                        <button type="submit" name="delete" value=<?php echo $dt["id_pegawai"]; ?>>DELETE</button>
                    </form>
                    <form action="update.php" method="GET">
                        <button type="submit" name="update" value=<?php echo $dt["id_pegawai"]; ?>>UPDATE</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <form action="insert.php ">
        <button>INSERT DATA</button>
        
        </br>
</body>
</html>