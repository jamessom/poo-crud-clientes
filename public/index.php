<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
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
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container" ng-app="sortApp" ng-controller="mainController">

            <div class="large-12 columns">
                <div class="callout primary">
                    <p>Sort Type: {{ sortType }}</p>
                    <p>Sort Reverse: {{ sortReverse }}</p>
                    <p>Search Query: {{ searchFish }}</p>
                </div>

                <table class="hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <tr>
                                <th>#ID</th>
                                <th>
                                    <a href="#" ng-click="sortType = 'nome'; sortReverse = !sortReverse">
                                        Nome
                                        <span ng-show="sortType == 'nome' && !sortReverse" class="fa fa-caret-down"></span>
                                        <span ng-show="sortType == 'nome' && sortReverse"  class="fa fa-caret-up"></span>
                                    </a>
                                </th>
                                <th>Data Nascimento</th>
                                <th>RG</th>
                                <th>CPF/CNPJ</th>
                            </tr>
                        </tr>
                    </thead>

                    <tbody>
                        <tr ng-repeat="pessoa in pessoas | orderBy:sortType:sortReverse | filter:searchFish">
                            <td>{{ $index+1 }}</td>
                            <td><a data-open="modalDadosCompletos" href="">{{ pessoa.nome }}</a></td>
                            <td>{{ pessoa.dataNasc }}</td>
                            <td>{{ pessoa.rg }}</td>
                            <td>{{ pessoa.cnpj ? pessoa.cnpj : pessoa.cpf }}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="reveal" id="modalDadosCompletos" data-reveal>
                    <div class="row">
                        <div class="callout secondary">
                            <p>Nome: </p>
                            <p>Data de Nascimento: </p>
                            <p>RG: </p>
                            <p></p>
                        </div>
                    </div>
                    <a data-close class="button tiny align-right" href="#">Fechar</a>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>

