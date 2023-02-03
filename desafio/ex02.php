<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: sans-serif;
    }
    .header {
        margin: 60px 0;
        text-align: center;
        
   } 
   .container {
        max-width: 400px;
        margin: 0 auto;
   }
   input {
        width: 100%;
        padding: 8px 16px;
        border-radius: 4px;
        margin-bottom: 8px;
   }
   button {
        display: block;
        width: 100%;
        padding: 8px 16px;
        background-color: #000;
        color: #fff;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
   }
   button:hover {
        background: #1d1d1d;
   }
   .result {
        margin-top: 40px;
        text-align: center;
   }

</style>
<body>
    <div class="header">
        <h1>Desafio 02</h1>
    </div>
    <div class="container">
        <form>
            <div>
                <label>Informe o número total de alunos</label>
                <input type="number" name="totalStudents" value="0" required>
            </div>
            <div>
                <label>Homens</label>
                <input type="number" name="manUnit" value="0" required>
            </div>
            <div>
                <label>Mulheres</label>
                <input type="number" name="womanUnit" value="0" required>
            </div>
            
            <button type="submit">Calcular</button>
        </form>
        <div class="result">
        <?php 
            $totalStudents = 0;
            $manUnit = 0;
            $womanUnit = 0;

            if(isset($_GET["totalStudents"], $_GET["manUnit"],$_GET["womanUnit"])) {
                $totalStudents = $_GET["totalStudents"];
                $manUnit = $_GET["manUnit"];
                $womanUnit = $_GET["womanUnit"];

                $pctMan = ($manUnit / $totalStudents * 100);
                $pctWoman = ($womanUnit / $totalStudents * 100);
                
        
                echo "O percentual de Homens é $pctMan%<br/>";
                echo "O percentual de mulheres é $pctWoman%";

            }
        ?> 
        </div>
   
    <div id="chart_div"></div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Homens', <?php echo $pctMan ?>],
          ['Mulheres', <?php echo $pctWoman ?>]
        ]);

        // Set chart options
        var options = {'title':'Percentual entre homens e mulheres',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</body>
</html>