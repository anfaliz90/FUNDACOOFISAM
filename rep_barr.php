<?php
include('conn.php');
include('datos_graf.php');
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
        text: 'REGISTRO DE PAGO DE CICLO I'
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
            'TARQUI']
    },

    yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'PAGOS Y NO PAGOS'
        }
    },

    tooltip: {
        formatter: function () {
            return '<b>' + this.x + '</b><br/>' +
                this.series.name + ': ' + this.y + '<br/>' +
                'Total: ' + this.point.stackTotal;
        }
    },

    plotOptions: {
        column: {
            stacking: 'normal'
        }
    },

    series: [
    {
                name: 'FUTBOL NO PAGO',
        data: [<?php echo $FUTBOL_GAN?>, 
               '',
               <?php echo $FUTBOL_AGN?>,
               <?php echo $FUTBOL_RIN?>,
               <?php echo $FUTBOL_ARN?>,
               <?php echo $FUTBOL_PITN?>,
               <?php echo $FUTBOL_PLN?>,
               <?php echo $FUTBOL_GUN?>,
               <?php echo $FUTBOL_SUN?>,
               <?php echo $FUTBOL_TAN?>],
        stack: 'FUTBOL'
    },
                 {
        name: 'FUTBOL PAGO',
        data: [<?php echo $FUTBOL_GAP?>, 
               '',
               <?php echo $FUTBOL_AGP?>,
               <?php echo $FUTBOL_RIP?>,
               <?php echo $FUTBOL_ARP?>,
               <?php echo $FUTBOL_PITP?>,
               <?php echo $FUTBOL_PLP?>,
               <?php echo $FUTBOL_GUP?>,
               <?php echo $FUTBOL_SUP?>,
               <?php echo $FUTBOL_TAP?>],
        stack: 'FUTBOL'
    },
        
        
        {
        name: 'MUSICA-PAGO',
        data: [<?php echo $MUSICA_GAP?>, 
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               ''],
        stack: 'MUSICA'
    }, 
        {
        name: 'MUSICA-NO PAGO',
        data: [<?php echo $MUSICA_GAN?>, 
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               ''],
        stack: 'MUSICA'
    },
        {
        name: 'DANZA - PAGO',
        data: [<?php echo $DANZA_GAP?>, 
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               ''
               ],
        stack: 'DANZA'
    },
         {
        name: 'DANZA - NO PAGO',
        data: [<?php echo $DANZA_GAN?>, 
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               ''
               ],
        stack: 'DANZA'
    },
            {
        name: 'BALONCESTO - PAGO',
        data: [
               '', 
               <?php echo $BALONCESTO_PIP?>,
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               ''],
        stack: 'BALONCESTO'
    },
     {
        name: 'BALONCESTO N- NO PAGO',
        data: [
               '', 
               <?php echo $BALONCESTO_PIN?>,
               '',
               '',
               '',
               '',
               '',
               '',
               '',
               ''],
        stack: 'BALONCESTO'
    },]
});
		</script>
	</body>
</html>
