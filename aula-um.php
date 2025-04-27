<?php
    # Minhas variáveis
    $produto = "Carro";
    $valor = 'Trinta mil reais <br>';
    $bolean = true;
    # Minhas chamadas para o usuários
    # Primeira aula
    echo "Olá mundo";
    echo "<br> Seja Bem Vindo ao Curso de PHP Aula 1";
    # Segunda aula, aprendendo variáveis
    echo "<br> Seja Bem Vindo ao Curso de PHP Aula 2 <br>";
    echo "O valor do $produto é $valor";
    echo "<br> $bolean <br>";
    # Terceira aula, aprendendo constant
    define ("MENSAGEM", "Seja Bem Vindo ao Curso de PHP Aula 3 <br>");
    echo MENSAGEM;
    # Operações matemáticas
    echo ("Trabalhando com operações matematicas");
    # Declaração de variáveis.
    $a = 3;
    $b = 5.4;
    $c = 15;
    $soma = $a + $b + $c;
    $sub = $c - $b;
    $mult = $a * $b;
    $div = $c / $a;
    $resto = 16 % $a;
    $x = 10;
    $x1 = 10;
    $x2 = 10;
    $x = $x + 2;
    $x1 = $x1 - 2;
    $x2 = $x2 / 2;
    # Valores apresentados
    echo "<br> O valor da soma é $soma";
    echo "<br> A subtração de  $c - $a é igual a $sub";
    echo "<br> A multiplicação de $a X $b é igual a $mult";
    echo "<br> A divisão de $c / $a é igual a $div";
    echo "<br> O resto da divisão é $resto";
    echo "<br> Valor de X é: $x";
    echo "<br> O valor de X é: $x1";
    echo "<br> Valor de X é: $x2";
    echo "<br> Expressões condicionais e operadores de comparação";
    $ab = 5;
    $bc = 6;
    $cd = 5;
    # Valores apresentados
    # Operadores menor
    if($ab < $bc) {
        echo "<br> $ab é menor do que $bc";
    }
    # Operadores menor ou igual
    if($ab <= $cd) {
        echo "<br> $ab é menor ou igual a $cd";
    }
    # Operadores igual
    if($ab == $cd) {
        echo "<br> $ab é igual a $cd";
    }
    # Operadores diferentes
    if($ab != $bc) {
        echo "<br> $ab é diferente de $bc";
    }
    # Operadores usando a função if e else
    if($ab < $bc) {
        echo "<br> $ab é menor do que $bc";
    }else if($bc > $ab) {
        echo "<br> $bc é maior do que $ab";
    }else{
        echo "<br> $ab é igual a $cd";
        }
    if($bc > $cd) {
        echo "<br> $bc é maior do que $cd";
    }
    # Aprendendo Switch
    echo "<br> Utilizando Switch";
    $numero = 2;
    switch($numero) {
        case 1:
            $mensagem = "Número 1";
            break;
        case 2:
            $mensagem = "Número 2";
            break;
        case 3;
            $mensagem = "Número 3";
            break;
        case 4;
            $mensagem = "Número 4";
            break;
        default:
            $mensagem = "Outro Número";
    }
    echo "<br> Você selecionou $mensagem <br>";
    # Utilizando while em PHP
    echo ("<br> Utilizando while em PHP");
    # Ao informar um valor, ele irá até o valor informado no while
    $seis = 1;
    # O valor informado na variável sete, irá contar até chegar em 10
    while($seis <=10) {
        echo "<br> Número $seis";
        $seis = $seis +1;
    }
    # Utilizando do while em PHP
    echo "<br><br> Utilizando do while em PHP";
    $sete = 1;
    # Abaixo do será executado ao menos uma vez, ou seja, se a variável sete for maior do que a declarada em while, este valor será apresentado na tela.
    do{
        echo "<br> Número $sete";
        $sete++;
    }while($sete <=10);
    # Utilizando for em PHP
    echo "<br><br> Utilizando FOR em PHP";
    for($oito=1; $oito<=15; $oito++) {
        $resto = $oito % 2;
        if($resto ==0) {
            echo "<br> Número Pares: $oito";
        }
    }
    # Utilizando array em PHP
    echo "<br><br>Utilizando array em php";
    $carros = array("Gol","Uno","Meriva");
    echo "<br> $carros[0]";
    echo "<br> $carros[1]";
    echo "<br> $carros[2]";
    $carrosval = array("Gol"=>"34.000","Uno"=>"33.000","Meriva"=>"48.000");
    echo "<br>" .$carrosval['Gol'];
    echo "<br>" .$carrosval['Meriva'];
    echo "<br>" .$carrosval['Uno'];
;    ?>