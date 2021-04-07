


'use strict';
genApp
    .controller('AgendaController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $http.get(URL_PREFIX + 'agenda')
        .then(function(response){

          response.data.resultado.agenda;
          $scope.agenda = d3.nest()
                        .key(function(d) { return d3.timeParse("%Y-%m-%d")(d.proxima_audiencia); })
                        .sortKeys((a, b) => new Date(a) - new Date(b))
                        .entries(response.data.resultado.agenda); ;

                        $scope.agenda.forEach(function(d){ d.key = d3.timeFormat("%A %d/%m")(new Date(d.key))})  
          
          $scope.loading = false;
        },function(e){
          $scope.loading = false;
        });
       
    });
