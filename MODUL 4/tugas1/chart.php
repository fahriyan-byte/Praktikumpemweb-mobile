<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

         <form method="get" action="index.php">
         <input style="background-color: black; color: #fff;" type="submit" value="Home" /></form>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="   dules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>
          <h3 class="highcharts-description"> Berikut adalah hasil survei terkait mata pelajaran yang ingin diambil dari beberapa orang mahasiswa dan pelajar</h3>
         <table id="datatable">
            <thead>
                 <tr>
                    <th>Minat</th>
                    <th>Jumlah Peminat</th>
                </tr>
             </thead>
            <tbody>
                    <?php
                    require 'koneksi.php';
                    $view = $koneksi -> query("SELECT minat,COUNT(*) AS hasil FROM `peminat` GROUP BY minat");
                    while($row=$view->fetch_array()){ ?> 
                <tr>
                    <td><?php echo $row['minat']; ?></td>  
                    <td><?php echo $row['hasil']; ?></td>                                                      
                </tr>						
                 <?php }?>
             </tbody>
        </table>
    </figure>
<script>
Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Survei OSN SMAN 3 PANGKALAN BUN'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Orang'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
</script>
</body>
</html>