<section class="agenda" ng-controller="AgendaController as homeCtrl">
    <div class="container px-0">

        <div class="agenda jumbotron">
          

            <div ng-show="loading"> <progress class="loader-mail pure-material-progress-linear" />   </div>
            <div class="row" ng-cloak>
                <div class="col-12 text-center">
                <h3>Agenda de próximas audiencias</h3>
                </div>
            </div>
              <div class="row" ng-cloak>
                

                <div class="col-md-3 col-sm-12">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a ng-repeat="dia in agenda" class="nav-link" ng-class="{'active': $first}" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-dia{{$index}}" role="tab" aria-controls="v-pills-dia{{$index}}" aria-selected="true">{{dia.key}}</a>
                  </div>
                </div>

                <div class="col-md-9  col-sm-12 ">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div ng-repeat="dia in agenda" class="tab-pane fade "  ng-class="{'show active': $first}" id="v-pills-dia{{$index}}" role="tabpanel" aria-labelledby="v-pills-dia{{$index}}-tab">
                                <div class="agenda card float-md-left" ng-repeat="a in dia.values" ng-class="a.suspendida?'bg-light':''" >
                                    <div class="card-header">
                                        <i class="icono-arg-reloj"></i>&nbsp;&nbsp;{{a.hora}}hs <span class="badge badge-secondary" ng-show="a.suspendida">SUSPENDIDA</span>

                                      </div>
                                    <div class="card-body">
                                        <p class="card-text m-0"><i class="fa fa-institution"></i> {{a.sede}}</p>
                                      <h5 class="card-title my-2">{{a.caus_nombre_vulgar}}</h5>
                                      <a href="{{a.accesibilidad}}" class="card-link"  ng-show="!a.suspendida && a.accesibilidad"><i class="icono-arg-credenciales"></i> Acreditación</a>
                                    </div>
                                    <div class="card-footer " ng-show="a.transmision">
                                      <a ng-href="{{a.transmision}}" target="_blank" rel="noopener noreferrer" class="card-link" ><i class="icono-arg-youtube"></i> Ver en vivo</a>
                                    </div>
        

                                </div>
                    </div>
                    
                 </div>
                </div>
              </div>


        
          </div>


       
    </div>
</section>