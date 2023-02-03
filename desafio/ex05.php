<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05</title>
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
        <h1>Desafio 05</h1>
    </div>
    <div class="container">
        
        <form>
            <div>
                <label>Informe o salário:</label>
                <input type="number" name="salary" value="0" required>
            </div>
            <div>
                <label>Informe o cargo: (ex.: Gerente, Engenheiro, Técnico)</label>
                <input type="text" name="office" required>
            </div>
            
            <button type="submit">Calcular</button>
        </form>
        <div class="result">
           
        <?php 
            $salary = isset($_GET['salary']) ? $_GET['salary'] : 0;
            $office = isset($_GET['office']) ? $_GET['office'] : "";
            $salaryNew = 0;
            $salaryDiff = 0;

            switch($office) {
                case $office === "Gerente":
                    $salaryNew = $salary * 1.1;
                    break;
                case $office === "Engenheiro":
                    $salaryNew = $salary * 1.2;
                    break;
                case $office === "Técnico":
                    $salaryNew = $salary * 1.3;
                    break;
                default:
                    $salaryNew = $salary * 1.4;
            }

            $salaryDiff = $salaryNew - $salary;

            echo "Salário inicial: R$$salary<br/>";
            echo "Novo Salário: R$$salaryNew<br/>";
            echo "Aumento Salarial: R$$salaryDiff";

        ?> 
        </div>
   
    
</body>
</html>