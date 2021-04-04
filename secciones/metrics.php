<section ng-controller="MetricsController as homeCtrl">
    <div class="container metrics">
        <h2 class="text-md-center m-0 titulo">Datos</h2>
        <p class="text-muted text-center mt-1" ng-cloak>Actualizado {{actualizacion}}</p>
        <div class="text-center" ng-show="loading">
            <div class="spinner-border" role="status">
              <span class="sr-only">Cargando...</span>
            </div>
          </div>
          
        <div class="row" >
            
          <div class="col text-center mt-3 mt-md-1" ng-repeat="m in metrics" ng-cloak>
<div class="h1 text-secondary m-0">{{m.titulo}}</div>
<div class="h6 font-weight-bold m-0">{{m.dato}}</div>
<div class="h6 font-weight-normal m-0">{{m.subtitulo}}</div>
          </div>
          
        </div>
      </div>

</section>
