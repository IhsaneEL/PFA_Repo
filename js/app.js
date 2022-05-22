

$(function() {
    $.ajax({
         
        url: "http://localhost:81/pfa%20new/chart.php"
        type: 'GET',
        success: function(data) {
		   chartData = data;
      var chartProperties = {
        caption: "Nombre d'etuduant par annee bac",
        xAxisName: "a",
        yAxisName: "b",
        rotatevalues: "1",
        theme: "zune"
      };
	  apiChart2 = new FusionCharts({
        type: "column2d",
        renderAt: "chart-container",
        width: "550",
        height: "350",
        dataFormat: "json",
        dataSource: {
          chart: chartProperties,
          data: chartData
        }
      });
      apiChart.render();

		   
		   
    });
	
	
});

	});

	



