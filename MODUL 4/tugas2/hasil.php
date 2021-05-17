<html>
<head>
<?php
    include('penghubung.php');
?>
    <title>Pemilu</title>
<link rel="stylesheet" href="style.css"> 
</head>
<body>
<form method="get" action="index.php">
         <input style="background-color: black; color: #fff;" type="submit" value="Home" /></form>
<div class="row">
  <div class="column">
    <table border="1">
    <h1 align ="center"> HASIL </h1>
        <thead>
            <th>Nama Calon</th>
            <th>Jumlah</th>
        </thead>
        <tbody>
        <?php
                    require 'penghubung.php';
                    $view = $koneksi -> query("SELECT pilihan,COUNT(*) AS jumlah FROM `suara` GROUP BY pilihan");
                    while($row=$view->fetch_array()){ ?> 
                <tr>
                    <td><?php echo $row['pilihan']; ?></td>  
                    <td><?php echo $row['jumlah']; ?></td>                                                      
                </tr>						
                 <?php }?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>