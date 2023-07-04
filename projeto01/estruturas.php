<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas</title>
</head>
<body>
    <?php 
        $nota = $_GET['nota'] ?? 0;
    ?>
    <main>
        <h1>Nota do aluno</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nota">Nota do aluno:</label>
        <input type="number" name="nota" id="nota" min="0" max="10" step="0.01" value="<?=$nota?>">
        <input type="submit" value="Consultar">
    </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <h3>Condicionais</h3>
        <?php 
            if ($nota >= 7) {
                echo "<p>Aluno aprovado!</p>";
            } elseif ($nota < 5) {
                echo "<p>Aluno reprovado.</p>";
            }else {
                echo "<p>Aluno em recuperação.</p>";
            }
            // ou
            echo "<br>";
            $situacao = ($nota >= 7) ? "Aprovado" : "Reprovado" ;
            echo $situacao;
        ?>
        <hr>
        <h3>Decisão</h3>
        <?php 
            $opcao = "dois";
            switch ($opcao) {
                case '1':
                    echo "<p>Opção 1 escolhida</p>";
                    break;
                case 'Dois':
                case 'dois';
                case 'DOIS';
                    echo "<p>Opção 2 escolhida</p>";
                    break;
                
                default:
                    echo "<p>Opção inválida</p>";
                    break;
            }
        ?>
        <hr>
        <h3>Repetição</h3>
        <?php 
            $nomes = ["Edson", "Arthur", "Jhenifer"];
            $quant = count($nomes);
            echo "for:";
            for ($i=0; $i < $quant; $i++) { 
                echo "<p>Item $i -> $nomes[$i]</p>";
            }
            echo "foreach:";
            foreach ($nomes as $item => $nome) {
                echo "<p>$item -> $nome</p>";
            }
            echo "while:";
            $c = 0; // contador
            while ($c < $quant) {
                echo "<p>$nomes[$c]</p>";
                $c++;
            }
            echo "do while:";
            $a = 0;
            do {
                echo "<p>$nomes[$a]</p>";
                $a++;
            } while ($a < $quant);
        ?>
    </section>
</body>
</html>