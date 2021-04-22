<section class="my-md-3">
<div class="juicios-detalle mt-5" ng-controller="JuiciosController as homeCtrl">
    <div class="container py-3 border shadow-sm rounded-sm ">
             <div class="title text-center">
                <h3>Los juicios en detalle</h3>
            </div>
            
            
            <div class="subtitle mt-md-4 col-lg-8 offset-lg-2 text-left" >
                <p>La dimensión de los juicios está dada por la cantidad de testigos, de víctimas e imputados. La tabla reúne los detalles de los juicios orales abiertos en el país según las jurisdicciones, cantidad de imputados, testigos y víctimas. También señala los juicios orales en los que interviene la Secretaría de Derechos Humanos de la Nación como parte querellante.</p>
            </div>

            <div class="text-center" ng-show="loading">
            <div class="spinner-border" role="status">
              <span class="sr-only">Cargando...</span>
            </div>
          </div>
          
          <div class="d-block d-sm-none clearfix"><i class="fa fa-arrow-right" ></i></div>
                  <table class="table  table-hover table-responsive ">
            <colgroup>
                <col>
                <col>
                <col>
                <col>
            </colgroup>
            <thead>
                <tr>
                    <th scope="col" ng-click="sortBy('caus_lugar')"><a href=""><span>Localidad</span></a></th>
                    <th scope="col" style="min-width:150px" ng-click="sortBy('caus_nombre_vulgar')"><a href=""><span>Juicio</span></a></th>
                    <th scope="col" ng-click="sortBy('ep_procesado')" class="text-center"><a href=""><span>Imputados</span></a>
                    </th>
                    <th scope="col" ng-click="sortBy('cant_victimas')" class="text-center"><a href=""><span>Víctimas</span></a> 
                    </th>
                    <th scope="col" ng-click="sortBy('testigos')" class="text-center"><a href=""><span>Testigos</span></a> 
                    </th>
                    
                    <th scope="col" ng-click="sortBy('caus_rolsdh')" class="text-center"><a href=""><span title="Secretaría de Derechos Humanos Querellante">SDHN <i class="fa fa-info-circle d-none d-sm-inline"></i></span></a> 
                    </th>
                    <th scope="col">
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="j in juicios | orderBy:sortElement" ng-cloak>
                    <td>{{j.caus_lugar}}</td>
                    <td>{{j.caus_nombre_vulgar}}</td>
                    <td class="text-center pb-1">{{j.ep_procesado}}</td>
                    <td class="text-center pb-1">{{j.cant_victimas}}</td>

                    <td class="text-center pb-1">{{j.testigos}}</td>
                    <td class="text-center pt-2 pb-1"><i class="icono-arg-validez-legal" ng-show="j.caus_rolsdh"></i></td>
                    <td class="pt-2 pb-1"><a href="/causa.php/?id={{j.caus_id}}/" class="btn  btn-sm btn-secondary m-0"><i class="icono-arg-revista d-none d-lg-inline"></i>
 Ficha</a></td>
                </tr>
            </tbody>
        </table>
        <!-- <div class="see-more text-center">
            <button class="btn">
                Mostrar 10 juicios más...
            </button>
        </div> -->
    </div>
</div>
</section>