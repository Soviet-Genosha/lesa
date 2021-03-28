<section class="agenda" ng-controller="AgendaController as homeCtrl">
    <div class="container">

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
                                <div class="agenda card float-md-left" ng-repeat="a in dia.values">
                                    <div class="card-header">
                                        <i class="icono-arg-reloj"></i>&nbsp;&nbsp;{{a.hora}}hs
                                      </div>
                                    <div class="card-body">
                                        <p class="card-text m-0"><i class="fa fa-institution"></i> {{a.sede}}</p>
                                      <h5 class="card-title my-2">{{a.caus_nombre_vulgar}}</h5>
                                    </div>
                                    <div class="card-footer">
                                      <a href="#" class="card-link" ><i class="icono-arg-credenciales"></i> Acreditarse</a>
                                      <a ng-href="{{a.transmision}}" target="_blank" rel="noopener noreferrer" class="card-link" ng-show="a.transmision">Another link</a>
                                    </div>
                                </div>
                    </div>
                    
                 </div>
                </div>
              </div>


        
          </div>


       
    </div>
</section>