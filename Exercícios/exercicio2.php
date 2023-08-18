<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>
       <!-- CSS Interno -->
       <style>
        .destaque {color:red;}
        .paragrafo {color:blue}
        .nome {color:green}
        
    </style>
</head>
<body>
    
    <h1 class="destaque">Trabalhando com PHP</h1>
    <p class="nome">
    O que é PHP? Guia Básico de Programação PHP
    PHP é uma linguagem de script do tipo server-side com diversos propósitos. Porém, ela é principalmente utilizada para gerar conteúdos dinâmicos num site. Trata-se de uma linguagem altamente popular devido à sua natureza de código aberto e suas funcionalidades versáteis</p>
    <p>Programador: Lara Andrade Ribeiro</p>
    <hr>

    <?php
        //Geração de texto (string)
        echo "Chama Sesi-Senai !";

        // Geração de texto estruturado (com tags, atributos)
        echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP.</h2>";
        echo  "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP. </h2>";

        // Geração de texto estruturado (com tags, atributos)
        echo "<h2>Gerando <span class='paragrafo'>HTML</span> através do PHP.</h2>";
        echo  "<h2>Gerando <span class=\"paragrafo\">HTML</span> através do PHP. </h2>";
        

    ?>

    
    <p>Parágrafo HTML</p>

    <?php
        $linguagem = "Linguagem PHP.";
    ?>

    <p>Parágrafo mesclando HTML com <?=$linguagem?></p>


</body>
</html>