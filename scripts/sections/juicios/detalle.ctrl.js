


'use strict';
genApp
    .controller('DetalleController', function($scope,$routeParams, $http,medService) {
        $scope.medService = medService;

        var id =  window.location.search.split('=')[1]
        $scope.loading = true;
        $http.get(URL_PREFIX + 'causas-ccds/'+ id)
        .then(function(response){

          $scope.juicio = response.data.resultado[0] ;
          
          $scope.juicio.etiquetas =  $scope.juicio.etiquetas.split(";")
          $scope.juicio.testigosDetalle = $scope.juicio.categoria_cantidad_testigo?$scope.juicio.categoria_cantidad_testigo.split(";").map(d=>d.trim().split(":")):null;
          $scope.loading = false;

          console.log('ok');
        },function(e){
          console.log('ko')
          $scope.loading = false;
        });
       
    });
