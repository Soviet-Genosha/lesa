<section class="durations mt-4"  >
    <div class="container bg-gray">
        <section class="text-center" id="parentDurationsVIZ" ng-controller="DurationsController as homeCtrl">
            <div class="title text-center">
                <h3>Monitor de velocidad</h3>
            </div>
            <div class="subtitle mt-md-4 mx-md-5 text-left" >
                <p>Un juicio oral por crímenes de lesa humanidad tarda, en promedio, 2 años y 9 años desde el requerimiento de elevación a juicio hasta el veredicto, según números del Ministerio Público Fiscal. Los juicios orales actualmente abiertos muestran enormes lejanías con ese promedio. </p>
            </div>


                    <span class="d-md-block">Ordenar por:</span> 

                    <div class="btn-group btn-group-toggle text-center" data-toggle="buttons">
                        <label class="btn btn-secondary text-white py-0 ml-md-3  active">
                        <input type="radio" name="options" ng-click="startDatavizDurations('nombre')" id="option1" checked>Nombre</label>
                        <label class="btn btn-secondary text-white py-0">
                        <input type="radio" name="options" ng-click="startDatavizDurations('Start')" id="option2">Requerimiento</label>
                        <label class="btn btn-secondary text-white py-0">
                        <input type="radio" name="options" ng-click="startDatavizDurations('etapa')" id="option3">Debate</label>
                    </div>
  

            <div class="graphic px-md-5" id="datavizDurations">
               

            </div>
            <div class="row mx-5 text-center">
                <div class="col-12 col-md ">
                    Referencias:
                </div>
                <div class="col-12  col-md">
                    <span class="referencia1">Requerimiento</span>
                </div>
                <div class="col-12  col-md">
                    <span class="referencia2">Elevación</span>
                </div>
                <div class="col-12  col-md">
                    <span class="referencia3">Audiencia</span>
                </div>
                <div class="col-12  col-md">
                    <span class="referencia4">Debate oral</span>
                </div>
                
            </div>
        </section>

    <section ng-controller="DurationsMetricsController as homeCtrl" class="mb-5">
        <div class="bg-light p-2 ">
        <h3 class="text-md-center">Métricas de duración de audiencias</h3>
        
        <div class="text-center" ng-show="loading">
            <div class="spinner-border" role="status">
              <span class="sr-only">Cargando...</span>
            </div>
          </div>
      
        <div class="row" >
            
          <div class="col text-center" ng-repeat="m in datos" ng-cloak>
                <div class="h3 text-secondary my-1">{{m.titulo}}</div>
                <div class="h6 font-weight-bold my-1">{{m.descripcion}}</div>
                <div class="h6 font-weight-normal my-1" ng-show="m.subtitulo">({{m.subtitulo}})</div>
                <div class="h6 font-weight-normal my-1" ng-show="!m.subtitulo">({{m.referencia}})</div>

          </div>
            
            </div>
        </div>
    </section>
    </div>
</section>