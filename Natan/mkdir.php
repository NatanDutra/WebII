<?php
    $dircod = $_POST['codigo'];
    $aux = "folder/$dircod";

    if(is_dir($aux)){
        echo "A pasta ja existe.";
        echo '<br/>';
        echo '<a href="javascript:history.back()">Voltar<a/>';
    }else {
        mkdir($aux,0777);
        echo "Pasta criada com sucesso.";
        echo '<br/>';
        echo '<a href="javascript:history.back()">Voltar<a/>';
    }

?>