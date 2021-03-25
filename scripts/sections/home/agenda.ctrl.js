


'use strict';
genApp
    .controller('AgendaController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $http.get(URL_PREFIX + 'agenda')
        .then(function(response){
          console.log(response);
          $scope.agenda = d3.nest()
                        .key(function(d) { return d3.timeParse("%Y-%m-%d")(d.proxima_audiencia); })
                        .sortKeys((a, b) => new Date(a) - new Date(b))
                        .entries(response.data.resultado.agenda); ;

                        $scope.agenda.forEach(function(d){ d.key = d3.timeFormat("%A %d/%m")(new Date(d.key))})  
          console.log($scope.agenda)
          
          $scope.loading = false;
          console.log('ok');
        },function(e){
          console.log('ko')
          $scope.loading = false;
        });
       
    });
