<?php

include('conn.php');
include('datos_graf2.php');


?>


<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="reportes/code/highcharts.js"></script>
<script src="reportes/code/modules/exporting.js"></script>
<script src="reportes/code/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>



		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'MATRICULAS POR AGENCIA Y MODALIDAD'
    },
    subtitle: {
        text: 'SELECCIONE'
    },
    xAxis: {
        categories: [
            'GARZON',
            'EL PITAL',
            'AGRADO',
            'RIVERA',
            'ARGENTINA',
            'PITALITO',
            'LA PLATA',
            'GUADALUPE',
            'SUAZA',
            'TARQUI'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'CANTIDAD DE MATRICULAS  '
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'FUTBOL',
        data: [<?php echo $FUTBOL_GA?>, 
               '',
               <?php echo $FUTBOL_AG?>,
               <?php echo $FUTBOL_RI?>,
               <?php echo $FUTBOL_AR?>,
               <?php echo $FUTBOL_PIT?>,
               <?php echo $FUTBOL_PL?>,
               <?php echo $FUTBOL_GU?>,
               <?php echo $FUTBOL_SU?>,
               <?php echo $FUTBOL_TA?>]

    }, {
        name: 'MUSICA',
        data: [<?php echo $MUSICA_GA?>, 
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               ''
               ]

    }, {
        name: 'DANZA',
        data: [<?php echo $DANZA_GA?>, 
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               ''
               ]
    }, {
        name: 'BALONCESTO',
        data: [
               '', 
               <?php echo $BALONCESTO_PI?>,
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               '']

    }]
});
		</script>
	</body>
</html>