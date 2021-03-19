


'use strict';
genApp
    .controller('MetricsController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $scope.ap = {};
        $scope.metrics = [];
        $http.get(URL_PREFIX + 'causas/listado/estado?limit=200&order=desc&campo=requerimiento')
        .then(function(response){
          
          $scope.loading = false;
          $scope.metrics = response.data.resultado.causas.filter(function(c){
            return c.cantidad > 0;
          });
          console.log();
          console.log('ok');
        },function(e){
          console.log('ko')
          $scope.loading = false;
        });
       
    });
