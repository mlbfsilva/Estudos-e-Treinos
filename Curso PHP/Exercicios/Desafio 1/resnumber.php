<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cálculo</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["number"];
            $antecessor = $n - 1;
            $sucessor = $n + 1;
            echo "O Antecessor é: $antecessor <br>";
            echo "O Sucessor é: $sucessor <br>";
            
        ?>
        <a href="javascript:history.go(-1)">Clique aqui para voltar a página anterior</a>
    </main>
</body>
</html>