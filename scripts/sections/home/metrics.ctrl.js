


'use strict';
genApp
    .controller('MetricsController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $scope.ap = {};
        $scope.metrics = [];
        $http.get(URL_PREFIX + 'header')
        .then(function(response){
          
          $scope.loading = false;
          $scope.metrics = response.data.resultado.header;
          $scope.actualizacion = d3.timeFormat("%B %d, %Y")(new Date(response.data.metadata.fecha_actualizacion));

        },function(e){
          $scope.loading = false;
        });
       
    });
