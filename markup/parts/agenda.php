<div class="agenda" ng-controller="AgendaController as homeCtrl">
    <div class="container">
        <div class="title text-md-center mt-md-5">
            <h3>Juicios activos: próximas audiencias</h3>
        </div>


        <div class="agenda-content">
          

            <div ng-show="loading"> <progress class="loader-mail pure-material-progress-linear" />   </div>

              <div class="row" ng-cloak>
                <div class="col-2">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a ng-repeat="dia in agenda" class="nav-link" ng-class="{'active': $first}" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-dia{{$index}}" role="tab" aria-controls="v-pills-dia{{$index}}" aria-selected="true">{{dia.key}}</a>
                  </div>
                </div>
                <div class="col-10">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div ng-repeat="dia in agenda" class="tab-pane fade "  ng-class="{'show active': $first}" id="v-pills-dia{{$index}}" role="tabpanel" aria-labelledby="v-pills-dia{{$index}}-tab">
                        <div class="agenda-content d-flex justify-content-between justify-content-md-center">
                            <div class="item text-center m-md-5" ng-repeat="a in dia.values">
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
                    
                 </div>
                </div>
              </div>


        
          </div>


       
    </div>
</div>