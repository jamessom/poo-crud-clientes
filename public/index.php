<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

<div class="content">
    <div class="row">
        <div class="large-12 columns">
            <h1>POO</h1>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <div class="callout">
                <h3>Projeto part. 1</h3>
                <ul>
                    <li>Crie uma classe com os principais atributos que um cliente deve ter, como nome, cpf, endereço, etc.</li>
                    <li>Crie um array de objetos de clientes, com 10 clientes dentro.</li>
                    <li>Crie uma página e faça a listagem geral dos clientes. Quando clicar sobre o cliente, você deverá mostrar os dados específicos do cliente selecionado.</li>
                    <li>Nessa listagem você também deverá ter a opção de ordenar os clientes pelo seu índice de forma ascendente e descendente.</li>
                </ul>

                <div class="row">
                    <?php require "../App/clientes.php"; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <table class="hover striped">
                <thead>
                <tr>
                    <th>#ID</th>
                    <th>Nome</th>
                    <th>Data Nascimento</th>
                    <th>RG</th>
                    <th>CPF/CNPJ</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ( $pessoas as $id => $pessoa ): ?>
                    <tr>
                        <td><?=$id;?></td>
                        <td><a class="pessoa-<?=$id;?>" data-open="modalDadosCompletos" href="#<?=$id;?>"><?=$pessoa->getNome();?></a></td>
                        <td><?=$pessoa->getDataNasc();?></td>
                        <td><?=$pessoa->getRg();?></td>
                        <td>
                            <?php echo ( $pessoa instanceof \POO\Pessoa\Types\PessoaFisica ) ? $pessoa->getCpf() : $pessoa->getCnpj(); ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="reveal" id="modalDadosCompletos" data-reveal>
                <div class="row">
                    <div class="callout secondary">
                        <p>Nome: <?= $pessoas[0]->getnome(); ?></p>
                        <p>Data de Nascimento: <?= $pessoas[0]->getDataNasc(); ?></p>
                        <p>RG: <?= $pessoas[0]->getRg(); ?></p>
                        <p><?= ( $pessoas[0] instanceof \POO\Pessoa\Types\PessoaFisica ) ? "CPF: ".$pessoas[0]->getCpf() : "CNPJ: ".$pessoas[0]->getCnpj(); ?></p>
                    </div>
                </div>
                <a data-close class="button tiny align-right" href="#">Fechar</a>
            </div>
        </div>
    </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>

