<?php
include('penghubung.php');

$qpemilih =  mysqli_query($koneksi, "SELECT IDPemilih AS 'ID Pemilih',NamaPemilih AS 'Nama Pemilih' FROM suara;");
$rpemilih = mysqli_fetch_all($qpemilih, MYSQLI_ASSOC);

$qsuara =  mysqli_query($koneksi, "SELECT Pilihan AS 'Pilihan',COUNT(Pilihan) AS 'Jumlah' FROM suara GROUP BY Pilihan;");
$rsuara = mysqli_fetch_all($qsuara, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Pemilu</title>
<link rel="stylesheet" href="style.css"> 
</head>
<body>
<h1 align="center">PEMILIHAN KETUA RT 20 KEL.MENDAWAI</h1>

<div class = "bd">
<form action="insert.php" method="POST">
        <label>Masukkan ID </label><br/>
        <input type="text" name="IDPemilih"/>
        <br/><br/>

        <label>Masukkan Nama</label><br/>
        <input type="text" name="NamaPemilih"/>
        <br/><br/>


        <label>PILIHAN ANDA :</label><br></br>
   
        <button style="background-color: black; color: #fff;" type="submit" name="Pilihan" 
        value="Fahriyan">NO.1<br></br>Fahriyan</button>
        
        <button style="background-color: black; color: #fff;" type="submit" 
        name="Pilihan" value="Radif">NO.2<br></br>Radif</button>

        <button style="background-color: black; color: #fff;" type="submit" name="Pilihan" 
        value="Inaya">NO.3<br></br>Inaya</button>
     
        
    </form>
   
</div>

    
<div class="column">
<div class="bd">
    <table border="1">
    <h3 align ="center"> Daftar Pemilih </h3>
        <thead>
            <th>ID Pemilih</th>
            <th>Nama Pemilih</th>
        </thead>
        <tbody>
            <?php foreach ($rpemilih as $vpemilih) { ?>
                <tr>
                    <td><?=  $vpemilih['ID Pemilih'] ?></td>
                    <td><?=  $vpemilih['Nama Pemilih']?></td>
                </tr>
            <?php } ?>
             </tbody>
            </table>
        </div>
    </div>
</div>
<form method="get" action="hasil.php" align = "center">
         <input style="background-color: black; color: #fff; width: 80px; height: 30px;" type="submit" 
         value="Hasil" /></form>
</body>
</html>