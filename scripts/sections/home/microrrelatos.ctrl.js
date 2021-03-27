


'use strict';
genApp
    .controller('MicrorrelatosController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $http.get(URL_PREFIX + 'microrelato')
        .then(function(response){
          $scope.microrrelatos = response.data.resultado.relato ;

          $scope.loading = false;
        },function(e){
          console.log('ko')
          $scope.loading = false;
        });
       
    });
