<section ng-controller="MetricsController as homeCtrl">
    <div class="container metrics">
        <h2 class="text-md-center m-0">Datos</h2>
        <p class="text-muted text-center mt-1" ng-cloak>Actualizado {{actualizacion}}</p>
        <div ng-show="loading">
            <progress class="loader-mail pure-material-progress-linear" />
        </div>
        <div class="row" >
            
          <div class="col text-center" ng-repeat="m in metrics" ng-cloak>
<div class="h1 text-secondary m-0">{{m.titulo}}</div>
<div class="h6 font-weight-bold m-0">{{m.dato}}</div>
<div class="h6 font-weight-normal m-0">{{m.subtitulo}}</div>
          </div>
          
        </div>
      </div>

</section>
