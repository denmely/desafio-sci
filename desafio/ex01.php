<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
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
        <h1>Desafio 01</h1>
    </div>
   <div class="container">
    <form>
            <input type="number" name="cookieUnit" value="0" required>
            <button type="submit">Calcular</button>
        </form>
   </div>
    
    <div class="result">
        <?php 
           $inputUnit = isset($_GET['cookieUnit']) ? $_GET['cookieUnit'] : 0;
           $calculate = $inputUnit * 75;

           echo "Essa quantidade de biscoite tem $calculate calorias"
        ?>
    </div>
   


</body>
</html>