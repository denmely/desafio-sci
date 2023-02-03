<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
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
        <h1>Desafio 03</h1>
    </div>
    <div class="container">
        
        <form>
            <div>
                <label>Informe o número de ovos</label>
                <input type="number" name="inputEggs" value="0" required>
            </div>
            
            <button type="submit">Calcular</button>
        </form>
        <div class="result">
          
        <?php 
            $inputEggs = isset($_GET['inputEggs']) ? $_GET['inputEggs'] : 0;
            $priceDozen = 3.25;
            $singlePrice = 0.45;
            $priceTotal = 0;
            $resultSingleEggs = 0;
            $resultNew = floor($inputEggs / 12);


            $modEggs = $inputEggs % 12;
            $resultSingleEggs = $modEggs * $singlePrice;
            
            $priceTotal = ($resultNew * $priceDozen) + $resultSingleEggs;

            if($resultNew == 1) {
                echo "Sendo $resultNew duzia a R$$priceDozen cada.<br/>";
            } else {
                echo "Sendo $resultNew duzias a R$$priceDozen cada.<br/>";
            }
            

            echo "O Valor total é R$$priceTotal,  $modEggs unidades a R$0.45 preço avulso."
        ?> 
        </div>
   
    
</body>
</html>