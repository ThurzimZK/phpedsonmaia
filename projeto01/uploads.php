<?php 
    if (isset($_POST['bt_enviar'])) {
        $tipos_permitidos = ['jpg', 'jpeg', 'gif', 'png','JPG', 'JPEG', 'GIF', 'PNG'];
        

        $quantidade_arquivos = count($_FILES['arquivo']['name']);
        $contador = 0;
 
        while($contador < $quantidade_arquivos) {
        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
        
        if (in_array($extensao, $tipos_permitidos)) {
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];
            $novo_nome = uniqid().".$extensao" ;

            if (move_uploaded_file($temporario, $pasta.$novo_nome)) {
                echo "<p>Upload realizado!</p>";
            } else {
                echo "<p>Falha no Upload!</p>";
            }
        } else {
            echo "<p>Tipo do arquivo não é permitido</p>";
        }
        $contador++;
    }
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads de arquivo</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data"> 
        <input type="file" name="arquivo[]" id="arquivo" multiple>
        <input type="submit" name="bt_enviar" value="Enviar">
    </form>
</body>
</html>