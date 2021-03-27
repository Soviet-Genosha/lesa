


'use strict';
genApp
    .controller('DetalleController', function($scope,$routeParams, $http,medService) {
        $scope.medService = medService;

        var id =  window.location.search.split('=')[1]
        $scope.loading = true;
        $http.get(URL_PREFIX + 'causas/juicios/'+ id)
        .then(function(response){

          $scope.juicio = response.data.resultado.juicio[0] ;
          
          $scope.juicio.etiquetas =  $scope.juicio.etiquetas.split(";")
          console.log( $scope.juicio.etiquetas);
          $scope.loading = false;
          console.log('ok');
        },function(e){
          console.log('ko')
          $scope.loading = false;
        });
       
    });
