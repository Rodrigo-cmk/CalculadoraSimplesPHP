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
    <span>
        • Você Escolheu
    </span>

    <?php
    ini_set('display_errors', 0 ); 
    error_reporting(0);

    if (isset($_POST['subtracao'])) {
        echo "<span> Subtração </span>";

        echo "<hr color='black'>";

        echo "  <form action='indexResultado.php'> 
                    <span> ‣ Insira o Minuendo......: </span>
                    <input type='number' name='minuendo' id='minuendo'>
        <br>
                    <span> ‣ Insira o Subtraendo..: </span>
                    <input type='number' name='subtraendo' id='subtraendo'>
        
                    <button type='submit'> Enviar </button>
                </form> ";
    }

    if (isset($_POST['soma'])) {
        echo "<span> Soma </span>";

        echo "<hr color='black'>";

        echo "  <form action='indexResultado.php'> 
                    <span> ‣ Insira a Primeira Parcela...: </span>
                    <input type='number' name='parcela1' id='parcela1'>
        <br>
                    <span> ‣ Insira a Segunda Parcela...: </span>
                    <input type='number' name='parcela2' id='parcela2'>
        
                    <button type='submit'> Enviar </button>
                </form> ";
    }

    if (isset($_POST['multiplicacao'])) {
        echo "<span> Multiplicação </span>";

        echo "<hr color='black'>";

        echo "  <form action='indexResultado.php'> 
                    <span> ‣ Insira o Primeiro Fator...: </span>
                    <input type='number' name='fator1' id='fator1'>
        <br>
                    <span> ‣ Insira o Segundo Fator...: </span>
                    <input type='number' name='fator2' id='fator2'>
        
                    <button type='submit'> Enviar </button>
                </form> ";
    }

    if (isset($_POST['divisao'])) {
        echo "<span> Divisão </span>";

        echo "<hr color='black'>";

        echo "  <form action='indexResultado.php'> 
                    <span> ‣ Insira o Dividendo...: </span>
                    <input type='number' name='dividendo' id='dividendo'>
        <br>
                    <span> ‣ Insira o Divisor........: </span>
                    <input type='number' name='divisor' id='divisor'>
        
                    <button type='submit'> Enviar </button>
                </form> ";
    }
    ?>

        <form action="index.php" >
            <p>
                <button>
                    ↩ Voltar
                </button>
            </p>
        </form>

</body>

</html>