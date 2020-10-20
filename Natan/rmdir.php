<?php
    $pasta = 'folder/' . $_GET['dir'];

    if(rmdir($pasta)){
        echo "Pasta deletada.";
        echo '<br/>';
        echo '<a href="javascript:history.back()">Voltar<a/>';
    }else {
        echo 'A pasta não pode ser deletada';
        echo '<br/>';
        echo '<a href="javascript:history.back()">Voltar<a/>';
    }
?>