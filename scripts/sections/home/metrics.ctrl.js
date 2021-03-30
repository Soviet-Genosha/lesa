


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

        },function(e){
          $scope.loading = false;
        });
       
    });
