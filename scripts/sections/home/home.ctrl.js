


'use strict';
genApp
    .controller('HomeController', function($scope, medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $scope.estadoFilter = [];
        $scope.jurisdiccionFilter = [];
        $scope.selectJurisdiccion = "";
        $scope.showDetail=function(med){
          $scope.selected = med;
        }

        $scope.propertyName = 'caus_nombre_vulgar';
        $scope.reverse = true;

          $scope.sortBy = function(propertyName) {
            $scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : false;
            $scope.propertyName = propertyName;
          };

        var TLP_TEXT= "(Todas las jurisdiccion)";
        $scope.addFilterCategory = function(cat){
            if (cat.selected){ 
                $scope.jurisdiccionFilter = $scope.jurisdiccionFilter.filter(function(cf){
                  return cf != cat.key;
                });
                if ($scope.jurisdiccionFilter.length == 0){
                    $scope.medService.categorias.map(function(c){
                     c.selectedClass = "  badge-info";
                     c.selected = false;
                   })  
                }else {
                  $scope.medService.categorias.map(function(c){
                     if (c.key == cat.key){
                       c.selectedClass = " badge-unselected";
                       c.selected = false;
                     }
                  })  
                }

            }
            else if ($scope.jurisdiccionFilter.indexOf(cat.key) == -1){
                if ($scope.jurisdiccionFilter.length == 0){
                    $scope.medService.categorias.map(function(c){
                     c.selectedClass = " badge-unselected";
                     c.selected = false;
                  })  
                }
                
                cat.selectedClass = " badge-info  ";
                cat.selected = true;
                // $scope.jurisdiccionFilter = [];
                $scope.jurisdiccionFilter.push(cat.key);     
            }
           

        }
        $scope.addFilterArea = function(cat){
            if (cat.selected){ 
                $scope.estadoFilter = $scope.estadoFilter.filter(function(cf){
                  return cf != cat.key;
                });
                if ($scope.estadoFilter.length == 0){
                    $scope.medService.areas.map(function(c){
                     c.selectedClass = "  badge-primary";
                     c.selected = false;
                   })  
                }else {
                  $scope.medService.areas.map(function(c){
                     if (c.key == cat.key){
                       c.selectedClass = " badge-unselected";
                       c.selected = false;
                     }
                  })  
                }

            }
            else if ($scope.estadoFilter.indexOf(cat.key) == -1){
                if ($scope.estadoFilter.length == 0){
                    $scope.medService.areas.map(function(c){
                     c.selectedClass = " badge-unselected";
                     c.selected = false;
                  })  
                }
                
                cat.selectedClass = " badge-primary  ";
                cat.selected = true;
                // $scope.jurisdiccionFilter = [];
                $scope.estadoFilter.push(cat.key);     
            }
           

           

        }

        $scope.filterFn = function(med){
            var selected = true;

            if ($scope.selectJurisdiccion.key && $scope.selectJurisdiccion.key!== TLP_TEXT ){
               selected = med.jurisdiccion === $scope.selectJurisdiccion.key;    
            }
            if (selected && $scope.estadoFilter.length > 0){
                selected = $scope.estadoFilter.indexOf(med.estado_causa) > -1;
            }
            if (selected && $scope.jurisdiccionFilter.length > 0){
                selected = $scope.jurisdiccionFilter.indexOf(med.jurisdiccion) > -1;
            }
            

            return selected;
        }
        d3.json(url_json)
                .then(function(data) {
                  data = data.resultado.causas;
                  console.log(data);
                    $scope.$apply(function(){
                        data = data.filter(function(d) { return d.jurisdiccion != ''; });

                       $scope.medService.jurisdiccion = []
                       var TLP = {
                           key: TLP_TEXT,
                           selected: true,
                       };
                       $scope.medService.jurisdiccion.push(TLP)

                       var ps = d3.nest()
                          .key(function(d) { return d.jurisdiccion; })
                          .entries(data);
                        $scope.medService.jurisdiccion.map(function(a){
                            a.selected = false;
                        });
                      $scope.medService.jurisdiccion = $scope.medService.jurisdiccion.concat(ps);
                      $scope.selectJurisdiccion   = TLP;                       

                      $scope.medService.areas =  d3.nest()
                          .key(function(d) { return d.estado_causa; })
                          .entries(data);
                        $scope.medService.areas.map(function(a){
                           a.selectedClass = " badge-primary";
                        })
                       $scope.medService.categorias =  d3.nest()
                          .key(function(d) { return d.jurisdiccion; })
                          .entries(data);
                        $scope.medService.categorias.map(function(c){
                           c.selectedClass = " badge-info";
                        })
                        // console.log(jurisdiccion, areas, categorias);
                  /*       data.forEach(element => {
                            element.precio_Unitario_PESOS = formatNumber(parseFloat(element.precio_Unitario_PESOS.replace(/,/g, ".")));	
                        }); */
                        
                        $scope.medService.items = data;
                        $scope.loading = false;
                    });
                })
                .catch(function(error){
                    // handle error   
                })
       
    });
