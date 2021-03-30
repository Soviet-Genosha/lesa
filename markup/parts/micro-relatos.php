<section class="microrrelatos container-fluid" ng-controller="MicrorrelatosController as homeCtrl">
    <div class="title text-md-center">
        <h2>Microrrelatos</h2>
        <p class="text-muted">Historias, testimonios y escenas de los juicios</p>
    </div>
    <div ng-show="loading"> <progress class="loader-mail pure-material-progress-linear" />   </div>
            <div class="card-deck d-flex flex-row flex-nowrap overflow-auto ng-cloak">
                

              <div class="card shadow-sm" ng-repeat="relato in microrrelatos" ng-cloak>
                <img src="images/Microrelatos/{{relato.url_imagen}}"  class="">
                <div class="card-body">
                  <h6 class="card-title">{{relato.titulo}}</h6>
                  <p class="card-text">{{relato.bajada}}</p>
                  
                </div>
                <div class="card-footer">
                    <a href="{{relato.url_video}}" target="_blank" class="card-link stretched-link ">Ver en youtube</a>
                </div>
              </div>


         
            </div>
</section>