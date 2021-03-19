


'use strict';
genApp
    .controller('CategoriesController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $http.get(URL_PREFIX + 'causas/listado/categoria')
        .then(function(response){
          
          $scope.categories = response.data.resultado.causas ;
          $scope.loading = false;
          console.log('ok');
        },function(e){
          console.log('ko')
          $scope.loading = false;
        });
       
    });
