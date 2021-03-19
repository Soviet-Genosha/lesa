


'use strict';
genApp
    .controller('CategoriesController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $http.get(URL_PREFIX + 'causas/listado/categoria')
        .then(function(response){
          
          $scope.categories = response.data.resultado.causas.map(function(c){
            return {
              name: c.descripcion,
              value:c.cantidad,
            }
          }) ;
          $scope.loading = false;
          startHighCharts();
          console.log('ok');
        },function(e){
          console.log('ko')
          $scope.loading = false;
        });
        var startHighCharts = function(){
          Highcharts.chart('categories', {
    chart: {
        type: 'packedbubble',
        height: '50%'
    },
    tooltip: {
        useHTML: true,
        pointFormat: '<b>{point.name}:</b> {point.value}'
    },
    plotOptions: {
        packedbubble: {
            minSize: '30%',
            maxSize: '120%',
            zMin: 0,
            zMax: 1000,
            layoutAlgorithm: {
                splitSeries: false,
                gravitationalConstant: 0.02
            },
            dataLabels: {
                enabled: true,
                format: '{point.name}',
                style: {
                    color: 'black',
                    textOutline: 'none',
                    fontWeight: 'normal'
                }
            }
        }
    },
    series: [{
        name: 'Main',
        data:$scope.categories
      }]
  });
        }

       
    });
