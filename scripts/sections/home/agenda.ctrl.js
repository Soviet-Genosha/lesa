


'use strict';
genApp
    .controller('AgendaController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $http.get(URL_PREFIX + 'causas?limit=5000')
        .then(function(response){
          
          $scope.agenda = response.data.resultado.causas ;
          $scope.loading = false;
          console.log('ok');
        },function(e){
          console.log('ko')
          $scope.loading = false;
        });
       
    });
