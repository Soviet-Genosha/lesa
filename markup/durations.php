<section class="durations mt-4"  >
    <div class="container bg-gray">
        <section class="text-center" id="parentDurationsVIZ" ng-controller="DurationsController as homeCtrl">
            <div class="title text-center">
                <h3>Monitor de velocidad</h3>
            </div>
            <div class="subtitle mt-md-4 mx-md-5 text-left" >
                <p>Un juicio oral por crímenes de lesa humanidad tarda, en promedio, 2 años y 9 años desde el requerimiento de elevación a juicio hasta el veredicto, según números del Ministerio Público Fiscal. Los juicios orales actualmente abiertos muestran enormes lejanías con ese promedio. </p>
            </div>

           

            <div class="btn-group btn-group-toggle text-center" data-toggle="buttons">
                Ordenar por: 
                <label class="btn btn-secondary text-white py-0 ml-3 active">
                  <input type="radio" name="options" ng-click="startDatavizDurations('nombre')" id="option1" checked> Nombre
                </label>
                <label class="btn btn-secondary text-white py-0">
                  <input type="radio" name="options" ng-click="startDatavizDurations('Start')" id="option2"> Fecha requerimiento
                </label>
                <label class="btn btn-secondary text-white py-0">
                  <input type="radio" name="options" ng-click="startDatavizDurations('etapa')" id="option3"> Inicio debate oral
                </label>
              </div>
              
            
           

            <div class="graphic px-md-5" id="datavizDurations">
               

            </div>
        </section>

    <section ng-controller="DurationsMetricsController as homeCtrl">
        <h3 class="text-md-center">Métricas de duración de audiencias</h3>
        <div ng-show="loading">
            <progress class="loader-mail pure-material-progress-linear" />
        </div>
        <div class="row" >
            
          <div class="col text-center" ng-repeat="m in datos" ng-cloak>
                <div class="h3 text-secondary my-1">{{m.titulo}}</div>
                <div class="h6 font-weight-bold my-1">{{m.descripcion}}</div>
                <div class="h6 font-weight-normal my-1" ng-show="m.subtitulo">({{m.subtitulo}})</div>
                <div class="h6 font-weight-normal my-1" ng-show="!m.subtitulo">({{m.referencia}})</div>

          </div>
          
      </div>
    </section>
    </div>
</section>