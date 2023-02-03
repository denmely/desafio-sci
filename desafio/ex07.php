<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
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
        <h1>Desafio 07</h1>
    </div>
    <div class="container">
     
        <form>
            <div>
                <label>Informe a idade do primeiro homem:</label>
                <input type="number" name="manOne" value="0" required>
            </div>
            <div>
                <label>Informe a idade do segundo homem:</label>
                <input type="number" name="manTwo" value="0" required>
            </div>
            <div>
                <label>Informe a idade do primeira mulher:</label>
                <input type="number" name="womanOne" value="0" required>
            </div>
            <div>
                <label>Informe a idade do segunda mulher:</label>
                <input type="number" name="womanTwo" value="0" required>
            </div>
            
            <button type="submit">Calcular</button>
        </form>
        <div class="result">
           
        <?php 
            $manOne = isset($_GET['manOne']) ? $_GET['manOne'] : 0;
            $manTwo = isset($_GET['manTwo']) ? $_GET['manTwo'] : 0;
            $womanOne = isset($_GET['womanOne']) ? $_GET['womanOne'] : 0;
            $womanTwo = isset($_GET['womanTwo']) ? $_GET['womanTwo'] : 0;
            $result = 0;
            $multResult = 0;

            if($manOne > $manTwo && $womanOne > $womanTwo) {
                $result = $manOne + $womanTwo;
                $multResult = $manTwo * $womanOne;
            } else if($manOne > $manTwo && $womanTwo > $womanOne) {
                $result = $manOne + $womanOne;
                $multResult = $manTwo * $womanTwo;
            } else if ($manTwo > $manOne && $womanOne > $womanTwo) {
                $result = $manTwo + $womanTwo;
                $multResult = $manOne * $womanOne;
            } else {
                $result = $manTwo + $womanOne;
                $multResult = $manOne * $womanTwo;
            }

           
            if($manOne === $manTwo && $womanOne === $womanTwo) {
                echo "<font color='#ff0000'>Por favor informe idades diferente.</font>";
                return;
            }
            

            echo "A soma das idades dp homem mais velho com a mulher mais nova é: $result<br/>";
            echo "O produto das idades homem mais novo com a mulher mais velha é: $multResult";

        ?> 
        </div>
   
    
</body>
</html>