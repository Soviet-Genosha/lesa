


'use strict';
genApp
    .controller('PeopleController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $scope.ap = {};
        $scope.metrics = [];
        $http.get(URL_PREFIX + 'causas')
        .then(function(response){
          
          $scope.datos = response.data.resultado.causas;
          $scope.loading = false;

          $scope.startDatavizPeople = function(){


          var circle = d3.arc()
                .innerRadius(0)
                .outerRadius(d => d)
                .startAngle(-Math.PI)
                .endAngle(Math.PI)
                

            var data =  $scope.datos.filter(d=>d.cant_imputados).map(d=>{ return {
              name:d.caus_nombre_vulgar,
              cant_victimas: +d.cant_victimas,
              procesado:+d.ep_procesado,
              incapacidad:+d.ep_incapacidad,
              rebeldia:+d.ep_rebeldia,
              fallecido:+d.ep_sobreseido_fallecimiento,
              imputados:d.cant_imputados
            }})

                   
            var dataTree = ({ children: data.map((d,i)=>{ 
              return{
                  name: d.name,
                  id: "g" + i,
                  datos : d,
                  children: d3.range(d.imputados)
                }
            }
          )})

          var height = width = 1000;
          
          var pack = d3.pack()
              .size([width, height])
              .padding(d => d.height === 1 ? 1 : 60);
          
          var colorea = d3.scaleOrdinal()
          .domain(["procesado","incapacidad","rebeldia","fallecido"])
          .range(["#6a7501","#ddd","#aaa","#777"]);

      

          var root = pack(d3.hierarchy(dataTree).sum(d => d3.randomUniform(0.8, 1.2)(1)));
           
          var svg = d3.select("#datavizPeople").append("svg")
                          // .attr("width",width)
                          // .attr("height",height)
                          ;

            console.log(root);
           
      var node = svg.append("g")
          .attr("pointer-events", "all")
            .selectAll("g")
            .data(root.descendants().slice(1).filter(d=>d.children))
            .join("g")
              .attr("transform", d => `translate(${d.x},${d.y})`);
    
       node.append("path")
           .attr("id", d => d.data.id)
           .attr("d", d => circle(d.r + 6))
           .attr("display", "none");
    
      node.append("circle")
          .attr("r", d => d.r)
          .attr("stroke", "#ccc")
        .attr("class", "juicio")
          .attr("fill","none");
      
      
      node.append("text")
          .attr("fill", "#555")
          .style("overflow", "visible")
          .style("font-size", "20px")
      .attr("text-anchor", "middle")
        .append("textPath")
          .attr("xlink:href", d => "#"+d.data.id)
          .attr("startOffset", "50%")
          .text(d => d.data.name);
      
      var imputados = svg.append("g")
        .selectAll("circle")
        .data(root.descendants().slice(1).filter(d=>!d.children))
        .join("circle")
            .attr("class",d=> d.parent.data.id + " imputado")
          .attr("cx", d => d.x)
           .attr("cy", d => d.y)
           .attr("r",12);
      
      node.each((dd,ii)=>{
          imputados.filter(e=>e.parent.data.id == dd.data.id)
            .sort((a,b)=>(d3.ascending(a.x,b.x)))
            .attr("fill",(d,i)=> {
                  switch(true){
                      case i<dd.data.datos.procesado:
                        return colorea("procesado");
                        break;
                      case i>=dd.data.datos.procesado && i<(dd.data.datos.procesado+dd.data.datos.incapacidad):
                        return colorea("incapacidad");
                        break
                      case i>=(dd.data.datos.procesado+dd.data.datos.incapacidad) && i<(dd.data.datos.procesado+dd.data.datos.incapacidad+dd.data.datos.rebeldia):
                        return colorea("rebeldia");
                        break
                       case i>=(dd.data.datos.procesado+dd.data.datos.incapacidad+dd.data.datos.rebeldia) && i<(dd.data.datos.procesado+dd.data.datos.incapacidad+dd.data.datos.rebeldia+dd.data.datos.incapacidad+dd.data.datos.fallecido ):
                        return colorea("fallecido");
                        break
                      
                  }
          })  
      })
      
    console.log(root);

      var box = {
        y0 : d3.min(root.children,d=>d.y-d.r)-40,
        y1 : d3.max(root.children,d=>d.y+d.r)+25,
        x0 : d3.min(root.children,d=>d.x-d.r)-25,
        x1 : d3.max(root.children,d=>d.x+d.r)+25
      };

      var vbHeight = box.y1 - box.y0+4,
          vbWidth = box.x1 - box.x0+4;

      svg.attr("viewBox",[box.x0-2, box.y0-2, vbWidth, vbHeight].join(" "))

    /*   svg.append("rect")
      .attr("fill","none")
      .attr("stroke", "black")
        .attr("x", box.x0)
        .attr("y", box.y0)
        .attr(isMobile?"width":"height", box.y1 - box.y0)
        .attr(!isMobile?"width":"height", box.x1 - box.x0); 
       */
  
  
  
          }//---------- end 


  
          $scope.startDatavizPeople();
  
        },function(e){
          $scope.loading = false;
        });
       


    });
