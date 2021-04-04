


'use strict';
genApp
    .controller('DurationsMetricsController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $scope.ap = {};
        $scope.metrics = [];
        $http.get(URL_PREFIX + 'audiencia')
        .then(function(response){
          
          $scope.datos = response.data.resultado.Audiencia;
          $scope.loading = false;

        },function(e){
          $scope.loading = false;
        });
       
    });
