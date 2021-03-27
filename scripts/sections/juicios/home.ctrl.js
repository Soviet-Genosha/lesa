


'use strict';
genApp
    .controller('HomeController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $http.get(URL_PREFIX + 'causas')
        .then(function(response){
          
          $scope.juicios = response.data.resultado.causas ;
          $scope.loading = false;
          console.log('ok');
        },function(e){
          console.log('ko')
          $scope.loading = false;
        });
       
    });
