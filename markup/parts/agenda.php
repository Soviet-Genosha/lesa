<div class="agenda" ng-controller="AgendaController as homeCtrl">
    <div class="container">
        <div class="title text-md-center mt-md-5">
            <h3>Juicios activos: próximas audiencias</h3>
        </div>
        <div class="agenda-content d-flex justify-content-between justify-content-md-center">
             <div ng-show="loading">
                            <progress class="loader-mail pure-material-progress-linear" />
                        </div>
            <div class="item text-center m-md-5" ng-repeat="a in agenda">
                <div class="type">
                   
                    {{a.requerimiento}}
                    <p>{{a.caus_nombre_vulgar}}</p>
                </div>
                <div class="stage">
                    <p> {{a.sede}}</p>
                </div>
                <div class="date">
                    <p>{{a.proxima_audiencia}} || {{a.hora}}</p>
                </div>
                <div class="link" ng-show="a.transmision">
                    <a ng-href="{{a.transmision}}" target="_blank" rel="noopener noreferrer">Ver</a>
                </div>
            </div>
    </div>
</div>