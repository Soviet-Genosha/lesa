<section class="microrrelatos container border rounded-sm  p-2 mt-5 mb-5 shadow-sm text-md-center position-relative" ng-controller="MicrorrelatosController as homeCtrl">
    
          <div class="title text-md-center">
                  <h3>Microrrelatos</h3>
              </div>
                <div ng-show="loading">
              <progress class="loader-mail pure-material-progress-linear " />   </div>
            <div class="card-deck d-flex flex-row flex-nowrap overflow-auto ng-cloak ">
                

              <div class="card m-1" ng-repeat="relato in microrrelatos.slice(microrrelatos.length-3,microrrelatos.length)" ng-cloak>
                <img src="images/Microrelatos/{{relato.url_imagen}}" >
                <div class="card-body">
                  <h6 class="card-title">{{relato.titulo}}</h6>
                  <p class="card-text">{{relato.bajada}}</p>
                </div>
            </div>


         
            </div>
            
            <a href="/microrrelatos.php" class="btn btn-secondary stretched-link my-1">Ver todos los microrrelatos</a>


</section>