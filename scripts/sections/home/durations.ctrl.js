


'use strict';
genApp
    .controller('DurationsController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $scope.ap = {};
        $scope.metrics = [];
        $http.get(URL_PREFIX + 'audiencia')
        .then(function(response){
          
          $scope.loading = false;
          $scope.datos = response.data.resultado.Audiencia;

        },function(e){
          $scope.loading = false;
        });
       
    });
