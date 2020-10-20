<?php
    $pasta = 'folder/' . $_GET['dir'];

    if(rmdir($pasta)){
        echo "Pasta deletada com sucesso.";
        echo '<br/>';
        echo '<a href="javascript:history.back()">Voltar<a/>';
    }else {
        echo 'A pasta nao pode ser deletada';
        echo '<br/>';
        echo '<a href="javascript:history.back()">Voltar<a/>';
    }
?>