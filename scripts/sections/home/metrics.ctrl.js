


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
          $scope.metrics = response.data.resultado.header.map(function(d){ return {
                                    "titulo" :  d.dato.slice(3,d.dato.indexOf( ' ', d.dato.indexOf( ' ' ) + 1 )),
                                    "dato" : d.dato.slice(d.dato.indexOf( ' ', d.dato.indexOf( ' ' ) + 1 ))
                                  }
                                  });

        },function(e){
          $scope.loading = false;
        });
       
    });
