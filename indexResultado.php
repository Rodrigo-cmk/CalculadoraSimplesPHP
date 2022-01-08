<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rodrigo Alves">
    <meta name="description" content="Exercício Calculadora PHP">
    <meta name="keybords" content="PHP, Entrada de Dados">
    <style>
        span, p{
            font-family: cursive;
            font-size: 25px;
        }
    </style>

    <title> Calculadora </title>
</head>

<body>

    <?php
    ini_set('display_errors', 0 ); 
    error_reporting(0);
    
        if(
            ($_GET['fator1']) == "" && ($_GET['fator1']) != 0 || 
            ($_GET['fator2']) == "" && ($_GET['fator2']) != 0 ||
            ($_GET['subtraendo']) == "" && ($_GET['subtraendo']) != 0 || 
            ($_GET['minuendo'])== "" && ($_GET['minuendo']) != 0 ||
            ($_GET['parcela1']) == "" && ($_GET['parcela1']) != 0 || 
            ($_GET['parcela2']) == "" &&($_GET['parcela2']) != 0 ||
            ($_GET['dividendo']) == "" && ($_GET['dividendo']) != 0 || 
            ($_GET['divisor']) == "" && ($_GET['divisor']) != 0
            ){

            echo "<script> 
                    alert('Foi identificado que existem um ou mais valores vazios. Por favor, insira um valor válido...');
                </script>";            
        }

        else{
            
            if (isset($_GET['fator1']) && isset($_GET['fator2'])) {
                $calculo = $_GET['fator1'] * $_GET['fator2'];

                echo "<p>".$_GET['fator1']." x ".$_GET['fator2']." = ".$calculo."</p>";
            }
        
            if (isset($_GET['parcela1']) && isset($_GET['parcela2'])) {
                $calculo = $_GET['parcela1'] + $_GET['parcela2'];

                echo "<p>".$_GET['parcela1']." + ".$_GET['parcela2']." = ".$calculo."</p>";
            }
        
            if (isset($_GET['subtraendo']) && isset($_GET['minuendo'])) {
                $calculo = $_GET['minuendo'] - $_GET['subtraendo'];

                echo "<p>".$_GET['minuendo']." - ".$_GET['subtraendo']." = ".$calculo."</p>";
            }
        
            if (isset($_GET['dividendo']) && isset($_GET['divisor'])) {
                $calculo = $_GET['dividendo'] / $_GET['divisor'];

                echo "<p>".$_GET['dividendo']." / ".$_GET['divisor']." = ".$calculo."</p>";
            }
        }
        
    ?>

        <form action="index.php" >
            <p>
                <button>
                    ↩ Início
                </button>
            </p>
        </form>

</body>

</html>