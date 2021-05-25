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
    <form action="/cadastro_editado" method="post">
        <div class="container">
            <div class="row">
                <input type="text" name="id" value="<?php echo $id;?>" style="display: none;">
                <div class="col">
                    <input class="form-control" type="text" name="nome" placeholder="Nome"
                        value="<?php echo $cadastro->getNome();?>">
                </div>
                <div class="col">
                    <input class="form-control" type="email" name="email" placeholder="email@email.com"
                        value="<?php echo $cadastro->getEmail();?>">
                </div>
            </div>
            <div class=" row">
                <div class="col">
                    <input class="form-control" type="tel" name="celular" placeholder="(99) 99999-9999"
                    value="<?php echo $cadastro->getCelular();?>">
                </div>
                <div class="col">
                    <input class="form-control" type="text" name="empresa" placeholder="Empresa"
                    value="<?php echo $cadastro->getEmpresa();?>">
                </div>
            </div>
            <div class="row">
            <div class="col">
                    <select class="form-control" name="cargo">
                        <?php
                        foreach ($cargos as $cargo) {
                            $selected = $cargo['ID'] === $cadastro->getCargo() ? 'selected>' : '>';
                            echo '<option value="' . $cargo['ID'] . '" ' . $selected . $cargo['CARGO'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <select class="form-control" name="setor" selected="<?php echo $cadastro->getSetor();?>">
                    <?php
                    foreach ($setores as $setor) {
                        $selected = $setor['ID'] === $cadastro->getSetor() ? 'selected>' : '>';
                        echo '<option value="' . $setor['ID'] . '" ' . $selected . $setor['SETOR'] . '</option>';
                    }
                    ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </div>
                <div class="col">
                    <div>
                        <input type="checkbox" name="informacoes" checked>
                        <span>Quero receber mais informações sobre esse tema</span>
                    </div>
                    <div>
                        <input type="checkbox" name="newsletter" checked>
                        <span>Quero Receber a NewsLetter</span>
                    </div>
                    <div>
                        <input type="checkbox" name="termosprivacidade" checked>
                        <span>Aceito os termos de serviço e li a política de privacidade. Concordo em
                            compartilhar meus dados com o organizador do evento e receber informações.</span>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
