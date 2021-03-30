<section ng-controller="MetricsController as homeCtrl">
<div class="title text-md-center">
        <h2>Datos</h2>
    </div>
    <div class="gral-metrics mt-3 mt-md-5">


    <div class="container metrics" >
        <div ng-show="loading">
            <progress class="loader-mail pure-material-progress-linear" />
        </div>
        <div class="row">

          <div class="text-center col" ng-repeat="m in metrics" ng-cloak>
                <h1 class="text-secondary m-0">{{m.titulo}}</h1>
                <h6 class="m-0 font-weight-bold">{{m.dato}}</h6>
                <h6 class="font-weight-normal m-0">{{m.subtitulo}}</h6>
          </div>
        </div>

      
    </div>
</section>