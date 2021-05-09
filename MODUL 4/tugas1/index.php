<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
        <div class = "column">
         <h1 style="background-color: red ; width: 1330px; height:43px; color:white;" align ="center">
         Data Survei OSN SMA NEGERI 3 PANGKALAN BUN</h1>
         <form method="get" action="chart.php" align = "center">
         <input style="background-color: black; color: #fff; width: 80px; height: 30px;" type="submit" value="Chart" /></form>
            <table border="1" align = "center">
                <thead>
                    
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>profesi</th>
                        <th>minat</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                       require 'koneksi.php';
                                          $no = 0;
                                          $view = $koneksi -> query("SELECT * FROM peminat ");
                                          while($row = $view -> fetch_array()){
                                             $no++;

                                            ?> 
                  <tr>
                                <td><?php echo $no ?></td>
                                  <td><?php echo $row['nama']; ?></td>  
                                  <td><?php echo $row['profesi']; ?></td>              
                                  <td><?php echo $row['minat']; ?></td>                                  
                      
</tr>						
                                          <?php }?>
                     </tbody>
                  </table>
               </div>
</body>
</html>