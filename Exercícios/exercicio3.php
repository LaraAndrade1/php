<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <!-- Lara Andrade Ribeiro -->

    <style>
        .destaque {color:red;}
    </style>
</head>
<body>
    <h2>EXEMPLOS PHP</h2>

    <!-- Exemplo código PHP para verificaçao de números inteiros -->
 
    <br><hr>
    <h2 class="destaque">Exemplo números inteiros</h2>

    <!-- Código PHP para função is_int -->
    <?php

        if(is_int(8)) { // true
            echo "É um número inteiro <br>";
        }
        if(is_int("Não é um inteiro")) { // false
            echo "É um inteiro 2<br>";
        }

        $a = 7;

        if(is_int($a)) { // true
            echo "É inteiro. <br>";
        }
    ?>

    <h3>Verificação:</h3>
    <?php

echo 4;
echo "<br>";
echo 6;
echo " | Valores inteiros. <br>";
echo 9 + 4;
echo " | Soma de inteiros. <br>";
echo -12;
echo " | Números negativos. <br>";

    ?>



<br><hr>
    <h2 class="destaque">Exemplo float</h2>

    
      
   
    <h3>Verificação:</h3>
   <?php

   $a ="sim";
   $b = 10.8;

   if(is_float($a)) {
       echo "É float 5! <br>";
   }

   if(is_float($b)) {
       echo "É float 10! <br>";
   }

   if(is_float(6565.63)) {
       echo "É float 15! <br>";
   }

   if(is_float("teste")) {
       echo "É float 20! <br>";
   }

?>


   




<br><hr>
    <h2 class="destaque">Exemplo textos</h2>

    <?php
    
       
       $batatas = 6;
       $morangos = 2;
       echo "Ela possui $batatas batatas <br>";
       
       echo "Ele precisa de $morangos morangos <br>";
       
       
       
    ?>   


    <h3>verificação:</h3>

    <?php

    $str = "LARA ANDRADE";
    $num = 200;

    if(is_string($str)) {
    echo "$str é uma string 1 <br>";
}

    if(is_string($num)) {
    echo "$num é uma string 2 <br>";
}

    if(is_string("asd")) {
    echo "É uma string 3 <br>";
}
?>

<br><hr>
    <h2 class="destaque">Booleano</h2>

<?php
         echo true;
         echo "<br>";
         echo false;



         if(1000 > 40) { // true
             echo "Está correto! <br>";
         }

         $senhaValida = true;

         if($senhaValida){
            echo "O usuário pode finalizar o cadastro";
         }
    ?>

<h3>Verificação:</h3>
    <!-- Código PHP para verificar booleanos -->
    <?php

    $b = true;

    if(is_bool($b)) {
        echo "É um booleano 1000 <br>";
    }
    ?>
 
 <br><hr>

    <h2 class="destaque">Array</h2>

    <?php
    $a = array (9, 10, 12, 16);

    print_r($a);
    echo "<br>";

    echo "<p>O primeiro valor da lista é: $a[0]</p>";

    ?>

    <?php

    $arr = ["Escola", 200, true];

    echo "<br>";
    print_r($arr);
    echo "<br>";
    print_r($arr[2]);
    echo "<br><p>O Segundo valor da lista é: $arr[2]</p>";

    ?>




    
</body>
</html>