<?php 
        function exibeOlaMundo()
        {
            echo "<p>Olá Mundo!</p>";
        }
        exibeOlaMundo();

        function exibeMensagem (string $mensagem)
        {
            echo "<p>$mensagem</p>";
        }
        exibeMensagem("Meu nome é Arthur");

        function somarDoisNumeros(float $n1, float $n2) : float
        {
            return $n1 + $n2;
        }
        $resultado = somarDoisNumeros(2, 1);
        echo "<p>$resultado</p>";