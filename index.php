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
        form{
            font-family: cursive;
            font-size: 25px;
        }
        button{
            font-family: cursive;
            font-size: 16px;
        }
    </style>

    <title> Calculadora </title>
</head>

<body>
    <form action="indexRecebeDados.php" method="post">
        <p>
            • Escolha uma operação...
        </p>

        <button name='subtracao' value="subtracao">
            Subtração
        </button>

        <button name='divisao' value="divisao">
            Divisão
        </button>

        <button name='soma' value="soma">
            Soma
        </button>

        <button name='multiplicacao' value="multiplicacao">
            Multiplicação
        </button>

    </form>

</body>

</html>