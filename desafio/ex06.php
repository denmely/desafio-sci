<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
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
        <h1>Desafio 06</h1>
    </div>
    <div class="container">
     
        <form>
            <div>
                <label>Informe o valor do produto:</label>
                <input type="number" name="valueProduct" value="0" required>
            </div>
        
            
            <button type="submit">Calcular</button>
        </form>
        <div class="result">
           
        <?php 
            $valueProduct = isset($_GET['valueProduct']) ? $_GET['valueProduct'] : 0;
            $pctProduct = 0.95;
            $index = 0;

            

            for ($i = 1; $i < 7; $i++) {
                $valueProduct = ($valueProduct * $pctProduct);
                echo "<br/>";
                echo "$i º semana " . round($valueProduct, 2);
                
            }
  

        ?> 
        </div>
   
    
</body>
</html>