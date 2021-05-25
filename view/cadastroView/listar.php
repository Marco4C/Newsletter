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
                    <th class="col">Celular</th>
                    <th class="col">Empresa</th>
                    <th class="col">Cargo</th>
                    <th class="col">Setor</th>
                    <th class="col">Recebe informações</th>
                    <th class="col">Recebe Newsletter</th>
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
                            echo $cadastro['CELULAR'];
                        echo '</td>';
                        echo '<td>';
                            echo $cadastro['EMPRESA'];
                        echo '</td>';
                        echo '<td>';
                            echo $cadastro['CARGO'];
                        echo '</td>';
                        echo '<td>';
                            echo $cadastro['SETOR'];
                        echo '</td>';
                        echo '<td>';
                            echo $cadastro['RECEBE_INFORMACOES'] === '1' ? 'SIM' : 'NÃO';
                        echo '</td>';
                        echo '<td>';
                            echo $cadastro['RECEBE_NEWSLETTER'] === '1' ? 'SIM' : 'NÃO';
                        echo '</td>';
                        echo '<td>';
                            echo '<a href="/editar/' . $cadastro['ID'] . '" class="btn btn-info">Editar</a>&nbsp;';
                            echo '<a href="/excluir/' .  $cadastro['ID'] . '" class="btn btn-danger">Excluir</a>';
                        echo '</td>';
                    echo '</tr>';
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
