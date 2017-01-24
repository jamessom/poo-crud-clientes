$(document).foundation();

angular.module('sortApp', []).controller('mainController', function($scope, $http) {

    $scope.sortType     = 'nome'; // set the default sort type
    $scope.sortReverse  = false;  // set the default sort order
    $scope.searchPerson = '';     // set the default search/filter term

    var REQ = {
        url: "/clientes.php",
        method: 'GET'
    };

    //Realiza a chamada, utilizando $http
    $http (REQ)
        .success(function(data){
            $scope.pessoas = data;
            console.log('Data: ', data);
        })
        .error(function(err){
            console.log('Erro: ', err);
        });
});