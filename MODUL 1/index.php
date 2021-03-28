<?php
      $nama= ["yorico prabowo", "riyan", "juma", "akbar", "agung","septian yosep"];
        function Konsonan($kalimat) {
        $jumlah = strlen($kalimat);
        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $count = $jumlah - ($a+$i+$u+$e+$o);
  
        return $count;
          }

        function Vokal($kalimat) {
        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $count = ($a+$i+$u+$e+$o);

        return $count;
          }
    ?>
<!DOCTYPE html>
<html>
<head>
 <title>modul pemweb</title>
</head>
<body>
 <caption>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 &emsp;&emsp;&emsp;&emsp;PEMROGRAMAN WEB dan MOBILE 1</caption>
</head>
<body>
<thead>
            <div style="background-color: #; 
            border: 1px solid #17202A;
             height: 115px; 
             margin: 10px 0px; 
             padding: 5px; 
             width: 300px;">
            <p>&emsp;Nama  : Muhammad Fahriyan Mahmudi </P>
            <p>&emsp;NIM   : 193020503018 </P>
            <p>&emsp;Modul I </P></div>
            <table border="1" width="600">
            
  
  <tr style="background-color: yellow;">
   <td><center>Nama</center></td>
   <td><center>Jumlah Huruf</center></td>
   <td><center>Jumlah Kata</center></td>
   <td><center>Kebalikan Nama</center></td>
   <td><center>Vokal</center></td>
   <td><center>Konsonan</center></td>
  </p>
  </tr>
  
          <?php foreach ($nama as $nm) :  ?>
            <tr>
                <td><?php echo $nm."<br>"; ?></td>
                <td><center><?php echo strlen($nm)."<br>"; ?></center></td>
                <td><center><?php echo str_word_count($nm)."<br>"; ?></center></td>
                <td><?php echo strrev($nm)."<br>"; ?></td>
                <td><center><?= Vokal(  $nm);  ?></center></td>
                <td><center><?= Konsonan( $nm);  ?></center></td>
            </tr>
        <?php endforeach; ?>

      </table>
      
</body>
</html>