<pre>
<?php 
    // forma antiga
    $alunos = array("Edson", "Arthur", "Jhenifer");
    // atual
    $cursos = ["PHP", "MySQL", "HTML", "CSS"];
    $ficha = [ 10, "Arthur Oliveira", 19, 1.75, true ];
    $bebidas = [
        "sucos" => ["Acerola", "Cupuaçu"],
        "refri" => ["Pepsi", "Coca-Cola"],
        "cafes" => ["Expresso", "Cappuccino"]
    ];
    $categorias = [];
    $categorias[0] = "Programação";
    $categorias[1] = "Design";

    print_r($alunos);
    echo "<hr>";
    print_r($cursos);
    echo "<hr>";
    print_r($ficha);
    echo "<hr>";
    print_r($bebidas);
    echo "<hr>";
    print_r($categorias);

    echo "Array alunos na posição 0: $alunos[0] <br>";
    echo "Array bebidas -> sucos na posição 1: " . $bebidas["sucos"][1];

?>
<hr>
<h2>Adicionando item no Final, array_push:</h2>
<?php 
    array_push($alunos, "Karina", "Nanci");
    print_r($alunos);
?>
<h2>Adicionando item no Inicio, array_unshift:</h2>
<?php 
    array_unshift($alunos, "Maria", "Catarina");
    print_r($alunos);
?>
<h2>Apagando item no Final, array_pop:</h2>
<?php 
    array_pop($alunos);
    print_r($alunos);
?>
<h2>Apagando item no Inicio, array_shift:</h2>
<?php 
    array_shift($alunos);
    print_r($alunos);
?>
<h2>Contar elementos, count:</h2>
<?="Quantidade de alunos: " .count($alunos)?>

<h2>Ordenar elementos, sort e rsort:</h2>
<?php 
    echo "ordem crescente: <br>";
    sort($alunos);
    print_r($alunos);

    echo "<br>ordem decrescente: <br>";
    rsort($alunos);
    print_r($alunos);
?>
</pre>