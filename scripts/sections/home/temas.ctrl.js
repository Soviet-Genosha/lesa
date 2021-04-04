


'use strict';
genApp
    .controller('CategoriesController', function($scope, $http,medService) {
        $scope.medService = medService;
        $scope.loading = true;
        $http.get(URL_PREFIX + 'causas/listado/categoria')
        .then(function(response){
          
          $scope.categories = response.data.resultado.causas;
          $scope.loading = false;
          startDataviz2();
          console.log('ok');
        },function(e){
          console.log('ko')
          $scope.loading = false;
        });
        
        var startDataviz2 = function(){
         
        var dataset = {
          "children": 
            $scope.categories
            
           };

         
      var diameter = d3.min([window.innerWidth*0.9,600]);

        var bubble = d3.pack(dataset)
            .size([diameter, isMobile?diameter*1.1:diameter])
            .padding(5);

        var svg = d3.select("#categories")
            .append("svg")
            .attr("width", diameter)
            .attr("height", isMobile?diameter*1.1:diameter)
            .attr("class", "bubble");

        var nodes = d3.hierarchy(dataset)
            .sum(function(d) { return d.cantidad; })
            .sort((a, b) => b.value - a.value);

        var node = svg.selectAll(".node")
            .data(bubble(nodes).descendants())
            .enter()
            .filter(function(d){
                return  !d.children
            })
            .append("g")
            .attr("class", "node")
            .attr("transform", function(d) {
                return isMobile?"translate(" + d.x + "," + d.y + ")":"translate(" + d.y + "," + d.x + ")";
            });

        node.append("title")
            .text(function(d) {
                return d.data.descripcion;
            });

        node.append("circle")
            .attr("r", function(d) {
                return d.r;
            })
            .style("fill", "silver");

        node.filter(d => d.r>30).append("text")
              .each(d => {
                const {lines, radius} = fit(d.data.etiqueta, isNaN(d.data.cantidad) ? undefined : d.data.cantidad);
                d.lines = lines;
                if (!isNaN(d.data.cantidad)) d.lines[d.lines.length - 1].value = true;
              })
              .attr("fill", "black")
            .selectAll("tspan")
            .data(d => d.lines)
            .enter().append("tspan")
              .attr("x", 0)
              .attr("y", (d, i, data) => (i - data.length / 2 + 0.8) * (18))
              .text(d => !isNaN(d.text)?(d.text + (d.text>1?" juicios":" juicio")):d.text)
              .attr("text-anchor", "middle")
              .attr("font-weight", (d, i, data) => i==data.length-1?300:600)

          
        }

        function fit(text, value) {
          let line;
          let lineWidth0 = Infinity;
          const lineHeight = 12;
          const targetWidth = Math.sqrt(measureWidth(text.trim()) * lineHeight);
          const words = text.split(/\s+/g); // To hyphenate: /\s+|(?<=-)/
          if (!words[words.length - 1]) words.pop();
          if (!words[0]) words.shift();
          const lines = [];
          for (let i = 0, n = words.length; i < n; ++i) {
            let lineText1 = (line ? line.text + " " : "") + words[i];
            let lineWidth1 = measureWidth(lineText1);
            if ((lineWidth0 + lineWidth1) * 0.4 < targetWidth) {
              line.width = lineWidth0 = lineWidth1;
              line.text = lineText1;
            } else {
              lineWidth0 = measureWidth(words[i]);
              line = {width: lineWidth0, text: words[i]};
              lines.push(line);
            }
          }
          if (value !== undefined) lines.push({width: measureWidth(value), text: value});
          let radius = 0;
          for (let i = 0, n = lines.length; i < n; ++i) {
            const dy = (Math.abs(i - n / 2 + 0.5) + 0.5) * lineHeight;
            const dx = lines[i].width / 2;
            radius = Math.max(radius, Math.sqrt(dx ** 2 + dy ** 2));
          }
          return {lines, radius};
        }


        function measureWidth(){
          const context = document.createElement("canvas").getContext("2d");
          return text => context.measureText(text).width;
        }
    });
    