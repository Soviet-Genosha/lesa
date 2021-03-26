<div ng-controller="MetricsController as homeCtrl">
    <div class="gral-metrics mt-3 mt-md-5">
        <div class="container d-flex justify-content-between">
         <div class="row">
                         <div ng-show="loading">
                            <progress class="loader-mail pure-material-progress-linear" />
                        </div>
                    </div>
                </div>

    <div class="container d-flex justify-content-between" ng-cloak>
        <div class="metric text-center" ng-repeat="m in metrics">
            <div class="quantity">
                <p>{{m.titulo}}</p>
            </div>
            <div class="info">
                <p>{{m.dato}}</p>
            </div>
        </div>
    </div>
</div>