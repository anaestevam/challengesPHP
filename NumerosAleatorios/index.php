<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<?
    $min = 0;
    $max = 1000;
    $numero = '';

    // Verifica se o botão foi clicado
    if (isset($_POST['gerar'])) {
    // Atualiza a variável ou realiza qualquer ação desejada
        $numero = rand($min,$max);
    }
?>
<body>
    <div class="box">
        <h1 align="center">Trabalhando com números aleatórios</h1>
        <p>
            Gerando um número aleatório entre 0 e 1000.
        </p>
        <p>
            O valor gerado foi <?=$numero?>
        </p>
        <form method="POST" action="index.php">
            <button type="submit" name="gerar">Gerar número</button>
        </form>
    </div>
</body>
<script>

</script>
</html>