


'use strict';
genApp
    .controller('DurationsController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $scope.ap = {};
        $scope.metrics = [];
        $http.get(URL_PREFIX + 'causas')
        .then(function(response){
          
          $scope.datos = response.data.resultado.causas;
          $scope.loading = false;

          $scope.startDatavizDurations = function(order){


            var orders = ({
              Start: (a, b) => d3.ascending(a.start, b.start),
              nombre: (a, b) => d3.ascending(a.name, b.name),
              etapa: (a, b) => d3.descending((a.end || today) - a.debate, (b.end || today) - b.debate)
            })


            var data =  $scope.datos.filter(d=>d.requerimiento).map(d=>{ return {
              name:d.caus_nombre_vulgar,
              start: new Date(d.requerimiento.slice(0,10)),
              requerimiento: new Date(d.requerimiento.slice(0,10)),
              elevacion: d.elevacion?new Date(d.elevacion.slice(0,10)):null,
              audiencia_preliminar: d.audiencia_preliminar?new Date(d.audiencia_preliminar.slice(0,10)):null,
              debate: d.debate?new Date(d.debate.slice(0,10)):null,
              cantvictimas: d.cantvictimas
            
            }}).sort(orders.nombre);
            
  
            var rowHeight = isMobile?50:34;
            var height = data.length*rowHeight,
                lineaAnchoMax = isMobile?10:6,
                lineYPos = isMobile?5:2,
                width = d3.min([window.innerWidth,700]),
               margin = ({top: 10, right: 10, bottom: 0, left: 10});
  

            var today = new Date();
  
                    
  
        
  
            var ancholinea = d3.scaleLinear()
            .domain(d3.extent(data, d=>d));
  
  
            var x = d3.scaleUtc()
            .domain([d3.min(data, d => d.start), today])
            .rangeRound([margin.left, width - margin.right])
  
  
            var y = d3.scalePoint()
            .domain(data.map(d => d.name))
            .rangeRound([margin.top, height - margin.bottom])
            .padding(1)
  
  
            var xAxis = g => g
            .attr("transform", `translate(0,23)`)
            .call(d3.axisTop(x).ticks(width / 80))
            .call(g => g.select(".domain").remove())
            .call(g => g.append("g")
                .attr("stroke", "white")
                .attr("stroke-width", 2)
            
                );
  

              if(!order) // primer inicio
                  {

              var svg = d3.select("#datavizDurations").append("svg")
                  .attr("viewBox", [0, 0, width, height]);
            
           
              var juicios = svg.append("g").attr("id","durationsVIZ")
                .selectAll("g")
                .data(data)
                .join("g").attr("class","juiciosItems")
                    .attr("transform",d => "translate(0,"+(y(d.name) + 0.5)+")")
              ;
              
              juicios.append("rect")
                      .attr("x", 0)
                      .attr("y", -rowHeight/2 -3)
                      .attr("width", width)
                      .attr("height", rowHeight-6)
                      .attr("fill","#ffffff")
                      ;
                      
              juicios.append("line")
                  .attr("stroke", "#999")
                  .attr("stroke-width",lineaAnchoMax/3)
                  .attr("stroke-dasharray", "2 2")

                  .attr("x1", d => x(d.requerimiento))
                  .attr("x2", d => x(d.elevacion || x.domain()[1])-1)
                  .attr("y1", lineYPos)
                  .attr("y2", lineYPos);
              
              juicios.append("line")
                  .attr("stroke", "#999")
                    .attr("stroke-width", lineaAnchoMax/3)
                  .attr("x1", d => x(d.elevacion || x.domain()[1]))
                  .attr("x2", d => x(d.audiencia_preliminar || x.domain()[1])-1)
                  .attr("y1", lineYPos)
                  .attr("y2", lineYPos);
              
            juicios.append("line")
                .attr("stroke", "#c2d229")
                  .attr("stroke-width",lineaAnchoMax/3)
                .attr("x1", d => x(d.audiencia_preliminar || x.domain()[1]))
                .attr("x2", d => x(d.debate || x.domain()[1])-1)
                .attr("y1", lineYPos)
                .attr("y2", lineYPos);
              
              juicios.append("line")
                  .attr("stroke", "#6A7501")
                  .attr("stroke-width", lineaAnchoMax)
                  .attr("x1", d => x(d.debate || x.domain()[1]))
                  .attr("x2", d => x(d.end || x.domain()[1]))
                  .attr("y1", lineYPos)
                  .attr("y2", lineYPos);
            
              
                  juicios.append("text")
                  .attr("font-family", "sans-serif")
                  .attr("font-size", isMobile?"16px":"12px")
                  .attr("text-anchor", "end")
  
                  .attr("x", d => x.range()[1])
                  .attr("y", lineYPos/2)
                  .attr("dy", (-lineaAnchoMax/2 - 4)+"px")
                  .attr("fill-opacity", d => d.end === null ? null : 1)
                  .text(d => d.name);
            
  
              svg.append("g")
                  .call(xAxis);
           
                  
             /* var dot = svg.append("g")
                  .attr("fill", "currentColor")
                .selectAll("circle")
                .data(data.filter(d => d.end !== null))
                .join("circle")
                  .attr("cx", d => x(d.end))
                  .attr("cy", d => y(d.name) + 0.5)
                  .attr("r", 2);
            */
                  } else{
             
                    console.log(' updating ' +  order )

                    data = data.slice().sort(orders[order])
                    

                    var t = d3.transition().duration(750);
            
                     y.domain(data.map(d => d.name));
                  d3.select("#durationsVIZ").selectAll(".juiciosItems").data(data, d => d.name).transition(t)
                      .delay(d => y(d.name))
                    .attr("transform",d => "translate(0,"+(y(d.name) + 0.5)+")");
      
                }
  
            
  
           
  
  
  
  
          }//---------- end 
  
          $scope.startDatavizDurations();
  
        },function(e){
          $scope.loading = false;
        });
       


    });
