


'use strict';
genApp
    .controller('AgendaController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $http.get(URL_PREFIX + 'agenda')
        .then(function(response){
          console.log(response);
          $scope.agenda = response.data.resultado.agenda ;
          $scope.loading = false;
          console.log('ok');
        },function(e){
          console.log('ko')
          $scope.loading = false;
        });
       
    });
