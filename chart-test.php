<?php
drupal_add_js('https://www.google.com/jsapi', 'external');
/*
$url = base_path() .  'sites/default/files/model.exhibit.json' ;
drupal_add_html_head_link(array('href' => $url , 'type' => 'application/json', 'rel' => 'exhibit/data'));
print_r($url);
*/
?>



   <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance'
        };

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <div id="chart_div" style="width: 900px; height: 500px;"></div>