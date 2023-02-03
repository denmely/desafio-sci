<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04</title>
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
   p {
        font-size: 14px;
        color: #1d1d1d;
   }

</style>
<body>
    <div class="header">
        <h1>Desafio 04</h1>
    </div>
    <div class="container">
        
        <form>
            <div>
                <label>Informe os segundos</label>
                <input type="number" name="inputSeconds" value="0" required>
            </div>
            
            <button type="submit">Calcular</button>
        </form>
        <div class="result">
           
        <?php 
            $inputSeconds = isset($_GET['inputSeconds']) ? $_GET['inputSeconds'] : 0;
            
            $secondsAfterDays = $inputSeconds % 86400;
            $secondsAfterHours = $inputSeconds % 3600;
            $secondsAfterMinutes = $inputSeconds % 60;

            $seconds = $inputSeconds % 60;
            $minutes = $secondsAfterHours / 60;
            $hours = $secondsAfterDays / 3600;
            $days = $inputSeconds / 86400;


            switch($inputSeconds) {
                case $inputSeconds >= 86400:
                    if ($days === 1) {
                        echo "$days dia";
                        return;
                    }
                    echo "$days Dias";
                    break;
                case $inputSeconds >= 3600:
                    if ($hours === 1) {
                        echo "$hours hora";
                        return;
                    }
                    echo "$hours Horas";
                    break;
                case $inputSeconds >= 60:
                    if ($minutes === 1) {
                        echo "$minutes minuto";
                        return;
                    }
                    echo "$minutes Minutos";
                    break;
                default:
                    if ($secondsAfterMinutes === 1) {
                        echo "$secondsAfterMinutes segundo";
                        return;
                    }
                    echo "$secondsAfterMinutes Segundos";
            }
            

            
        ?> 
        </div>
   
    
</body>
</html>