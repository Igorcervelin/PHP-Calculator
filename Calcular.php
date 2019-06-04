<?php include_once "assets/partials/_head.php"; ?>
<?php include_once "assets/partials/_header.php"; ?>


<?php

    require_once "assets/Calculator.php";
  
    $numero1 = $_GET['n1'];
    $numero2 = $_GET['n2'];
    $operacao = $_GET['op'];

    $resultado = Calculator::Calculate($numero1, $numero2, $operacao);

    echo "O resultado da operação $numero1 $operacao $numero2 é: $resultado"

    ?>

<?php include_once "assets/partials/_footer.php"; ?>