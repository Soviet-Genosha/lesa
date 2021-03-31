


'use strict';
genApp
    .controller('JuiciosController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $scope.sortElement = '';
        $scope.sortStatus = [];
        $scope.sortBy = function(v){
          if (!$scope.sortStatus[v]){
            $scope.sortStatus[v] = '+' + v;
          }else {
            if ($scope.sortStatus[v].indexOf('+') > -1){
              $scope.sortStatus[v] = '-' + v;  
            }else {
              $scope.sortStatus[v] = '+' + v;
            }
            
          }
           $scope.sortElement = $scope.sortStatus[v]
        }
        $http.get(URL_PREFIX + 'causas')
        .then(function(response){
          
          $scope.juicios = response.data.resultado.causas ;
          $scope.loading = false;
     
        },function(e){
          
          $scope.loading = false;
        });
       
    });
