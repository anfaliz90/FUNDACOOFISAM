<?php
include('conn.php');
include('datos_graf.php');

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gráficas</title>
        <link rel="stylesheet" type="text/css" href="registro.css">

		<style type="text/css">

		</style>
	</head>
    
	<body>

<script src="reportes/code/highcharts.js"></script>
<script src="reportes/code/highcharts-3d.js"></script>
<script src="reportes/code/modules/exporting.js"></script>
<script src="reportes/code/modules/export-data.js"></script>

<div id="container" style="height: 400px"></div>


		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 31,
            beta: 0
        }
    },
    title: {
        text    : 'Matrícula por agencias'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth:31,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'GRAFICA POR AGENCIA', sliced:true,
        data: 
            [
            ['GARZON', <?php echo $GARZON ?> ],
            ['EL PITAL', <?php echo $PITAL ?>],
            ['TARQUI', <?php echo $TARQUI ?>],
            ['GUADALUPE', <?php echo $GUADALUPE ?>],
            ['SUAZA', <?php echo $SUAZA ?>],
            ['LA ARGENTINA', <?php echo $ARGENTINA ?>],
            ['EL AGRADO', <?php echo $AGRADO ?>],                
            ['RIVERA', <?php echo $RIVERA ?>],
            ['LA PLATA', <?php echo $PLATA ?>],
            ['PITALITO', <?php echo $PITALITO ?>],
        ]
    }]
});
		</script>
        
        <table style="text-align:center;">
        <thead style="text-align:center;">
            <tr >
                <th colspan="10" style="text-align:center;" class="form-title"><span align="center">Matricula por agencia</span></th>
            </tr>
            <tr style="text-align:center;">
                <th style="text-align:center;">AGENCIA</th>
                <th style="text-align:center;">NÙMERO</th>
            </tr>
        </thead>
        <tr>
            <th style="text-align:center;"> GARZÓN    </th>
            <th style="text-align:center;"><?php echo $GARZON  ?>   </th>
        </tr>
        <tr>
            <th style="text-align:center;"> EL PITAL    </th>
            <th style="text-align:center;"><?php echo $PITAL  ?>   </th>
        </tr>
        <tr>
            <th style="text-align:center;"> GUADALUPE    </th>
            <th style="text-align:center;"><?php echo $GUADALUPE  ?>   </th>
        </tr>
        <tr>
            <th style="text-align:center;"> SUAZA    </th>
            <th style="text-align:center;"><?php echo $SUAZA  ?>   </th>
        </tr>
        <tr>
            <th style="text-align:center;"> LA PLATA    </th>
            <th style="text-align:center;"><?php echo $PLATA  ?>   </th>
        </tr>
        <tr>
            <th style="text-align:center;"> TARQUI    </th>
            <th style="text-align:center;"><?php echo $TARQUI  ?>   </th>
        </tr>
        <tr>
            <th style="text-align:center;"> EL AGRADO    </th>
            <th style="text-align:center;"><?php echo $AGRADO  ?>   </th>
        </tr>
        <tr>
            <th style="text-align:center;"> PITALITO    </th>
            <th style="text-align:center;"><?php echo $PITALITO ?>   </th>
        </tr>
        <tr>
            <th style="text-align:center;"> RIVERA    </th>
            <th style="text-align:center;"><?php echo $RIVERA  ?>   </th>
        </tr>
        <tr>
            <th style="text-align:center;"> LA ARGENTINA    </th>
            <th style="text-align:center;"><?php echo $ARGENTINA  ?>   </th>
        </tr>            
        <tr>
            <th style="text-align:center;"> TOTAL    </th>
            <th style="text-align:center;"><?php echo $TOTAL  ?>   </th>
        </tr>
    </table>    
	</body>
</html>