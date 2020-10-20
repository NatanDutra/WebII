<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário</title>
</head>

<style>
    form {border:2px solid #000; padding: 20px; margin-top:25px; font:16px Arial, Helvetica, sans-serif;color:#000000;}
    form input{padding:4px; width:200px; display:flex;}
    form textarea{width:250px; display:flex}
    form button{width:150px; cursor:pointer;}
    form {border: 1px solid #CCC; float: middle; padding: 12px; margin-top: 10px; font: 18px Arial, sans-serif; color:blue}
    div form{align-items: left; justify-content: left; }
</style>

<body>
    <div class="Formulário" align="center">

        <form action="mkdir.php" method="post">
            <label for="form" font-size= 20px>Formulário</label><br><br>
            <label for="codi_dir">Codigo:</label>
            <input name="cod_dir" placeholder="Código" type="text"><br>
            <label for="nome_arq">Nome do Arquivo:</label>
            <input name="arq_dir" placeholder="Nome Arquivo" type="text"><br>
            <label for="desc" placeholder="Descrição">Descrição:</label>
            <textarea id="descricao" name="desc" placeholder="Descrição" rows="7" cols="50"></textarea><br>
            <button nome="btn_dir" type="submit">Criar</button>
        </form>



        <div>
            <ul>
                <?php
                    $diretorio = 'folder';
                    $ponteiro = opendir($diretorio);

                    while ($nome_itens = readdir($ponteiro)){
                        $itens[] = $nome_itens;
                    }

                    sort($itens);

                    foreach($itens as $listar){
                        if ($listar != '.' && $listar != '..'){
                            $pastas[] = $listar;
                        }
                    }

                    if ($pastas != '') {
                        foreach($pastas as $listar){
                            echo "<li>$listar - <a href=\"rmdir.php?dir=$listar\">(x)excluir</a></li>";
                        }
                    }
                ?>
            </ul>
        </div>
</body>
</html>