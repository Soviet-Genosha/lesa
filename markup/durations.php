<section class="durations mt-4"  ng-controller="DurationsController as homeCtrl">
    <div class="container">
            <div class="title text-md-center">
                <h3>Monitor de velocidad</h3>
            </div>
            <div class="subtitle mt-md-4">
                <p>Un juicio oral por crímenes de lesa humanidad tarda, en promedio, 2 años y 9 años desde el requerimiento de elevación a juicio hasta el veredicto, según números del Ministerio Público Fiscal. Los juicios orales actualmente abiertos muestran enormes lejanías con ese promedio. </p>
            </div>
            <div class="graphic mt-2">
                <div id="observablehq-chart-951e3cb3"></div>

                    <script type="module">
                    import {Runtime, Inspector} from "https://cdn.jsdelivr.net/npm/@observablehq/runtime@4/dist/runtime.js";
                    import define from "https://api.observablehq.com/d/ff0bb7e858fd35c5.js?v=3";
                    new Runtime().module(define, name => {
                    if (name === "chart") return new Inspector(document.querySelector("#observablehq-chart-951e3cb3"));
                    });
                    </script>

                <p>Los colores de las líneas de tiempo varían a medida que avanza el ciclo del juicio, según cinco indicadores: requerimiento de elevación a juicio, elevación, audiencia preliminar, inicio de debate y veredicto.</p>
            </div>
       

        <h3 class="text-md-center">Métricas de duración de audiencias</h3>
        <div ng-show="loading">
            <progress class="loader-mail pure-material-progress-linear" />
        </div>
        <div class="row" >
            
          <div class="col text-center" ng-repeat="m in datos" ng-cloak>
                <div class="h3 text-secondary m-0">{{m.duracion}}</div>
                <div class="h6 font-weight-bold m-0">{{m.descripcion}}</div>
                <div class="h6 font-weight-normal m-0">({{m.referencia}})</div>
          </div>
          
      </div>
    </div>
</section>