<section ng-controller="MetricsController as homeCtrl">
    <div class="gral-metrics mt-1">
        <div class="container metrics" >
            <h2 class="text-md-center m-0">Datos</h2>
            <p class="text-muted text-center mt-1" ng-cloak>Última actualización: {{actualizacion}}</p>
            <div ng-show="loading">
                <progress class="loader-mail pure-material-progress-linear" />
            </div>
            <div class="row m-0">
                <div class="text-center col" ng-repeat="m in metrics" ng-cloak>
                    <h1 class="text-secondary m-0">{{m.titulo}}</h1>
                    <h6 class="m-0 font-weight-bold">{{m.dato}}</h6>
                    <h6 class="font-weight-normal m-0">{{m.subtitulo}}</h6>
              </div>
            </div>
        </div>
    </div>
</section>