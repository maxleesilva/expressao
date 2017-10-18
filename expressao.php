<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <title>Calculando expressão</title>
    </head>

    <body>
        <p>Crie um script em PHP que receba pela URL do navegador valores numéricos e os armazene nas variáveis $a, $b e $c. Em seguida calcule e escreva o valor da expressão ($a - $b) * $c :</p><hr><br>
    </body>

<form action="expressao.php" method="get">
    <style>
        div#expressao{
            text-align: center;
            width: 190px;
            background-color: antiquewhite;
            box-shadow: 0px 0px 10px grey;
            padding: 10px;
        }
    </style>
    
    <div id="expressao">
    <h1>Calculando a expressão <br>(a - b) * c</h1>
        <h3>a = <input name="a" type="int"/></h3>
        <h3>b = <input name="b" type="int"/></h3>
        <h3>c = <input name="c" type="int"/></h3>
    <input type="submit" value="Calcular"/>
        
<?php
        $a = @$_REQUEST["a"];
        $b = @$_REQUEST["b"];
        $c = @$_REQUEST["c"];
        $calculo = ($a - $b)*$c;
        print "<br><br>";
        echo "O valor da expressão é igual a $calculo."      
        
?>
    </div>
