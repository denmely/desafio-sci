<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
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
        <h1>Desafio 08</h1>
    </div>
    <div class="container">
        
        <form>
            <div>
                <label>Informe o valor do dólar atual:</label>
                <input type="number" name="inputDollar" step="any" value="0" required>
            </div>
            <div>
                <label>Informe a quantidade de 1 centavos</label>
                <input type="number" name="oneCent" value="0">
            </div>
            <div>
                <label>Informe a quantidade de 5 centavos</label>
                <input type="number" name="fiveCent" value="0">
            </div>
            <div>
                <label>Informe a quantidade de 10 centavos</label>
                <input type="number" name="tenCent" value="0">
            </div>
            <div>
                <label>Informe a quantidade de 25 centavos</label>
                <input type="number" name="twentyFiveCent" value="0">
            </div>
            <div>
                <label>Informe a quantidade de 50 centavos</label>
                <input type="number" name="fiftyCent" value="0">
            </div>
            
            <button type="submit">Calcular</button>
        </form>
        <div class="result">
           
        <?php 
             $inputDollar = isset($_GET['inputDollar']) ? $_GET['inputDollar'] : 0;
             $oneCent = isset($_GET['oneCent']) ? $_GET['oneCent'] : 0;
             $fiveCent = isset($_GET['fiveCent']) ? $_GET['fiveCent'] : 0;
             $tenCent = isset($_GET['tenCent']) ? $_GET['tenCent'] : 0;
             $twentyFiveCent = isset($_GET['twentyFiveCent']) ? $_GET['twentyFiveCent'] : 0;
             $fiftyCent = isset($_GET['fiftyCent']) ? $_GET['fiftyCent'] : 0;

             $valueReal = ($oneCent * 0.01) + ($fiveCent * 0.05) + ($tenCent * 0.1) + ($twentyFiveCent * 0.25) + ($fiftyCent * 0.5);
             if($inputDollar !== 0) {
                $valueDollar = ($valueReal / $inputDollar);
             }
             

             if($inputDollar === 0) {
                echo "Informe o valor dolar maior que zero";
                return;
             }

             if($valueReal >= $inputDollar) {
                echo "Parabéns você consegue comprar dólar ;)";
                return;
            } else {
                echo "Você não consegue comprar dólar :( $valueReal";
             }
             

        ?> 
        </div>
   
    
</body>
</html>