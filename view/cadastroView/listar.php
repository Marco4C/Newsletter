<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Newsletter</title>
</head>

<body>
    <div class="container">
        <h1>Lista de cadastrados</h1>
        <table class="table table-light table-striped table-bordered ">
            <thead>
                <tr>
                    <th class="col">ID</th>
                    <th class="col">Nome</th>
                    <th class="col">Email</th>
                    <th class="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista as $cadastro) :
                    echo '<tr>';
                        echo '<td>';
                            echo $cadastro['ID'];
                        echo '</td>';
                        echo '<td>';
                            echo $cadastro['NOME'];
                        echo '</td>';
                        echo '<td>';
                            echo $cadastro['EMAIL'];
                        echo '</td>';
                        echo '<td>';
                            echo '<a href="/Editar?ID=' . $cadastro['ID'] . '">Editar</a>&nbsp;';
                            echo '<a href="/Excluir/?ID=' .  $cadastro['ID'] . '">Excluir</a>';
                        echo '</td>';
                    echo '</tr>';
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
