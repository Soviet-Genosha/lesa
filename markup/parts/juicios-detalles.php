<div class="juicios-detalle mt-5" ng-controller="JuiciosController as homeCtrl">
    <div class="container">
        <table class="table table-striped table-hover table-responsive ">
            <colgroup>
                <col>
                <col>
                <col>
                <col>
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"><span>Jurisdicción</span> </th>
                    <th scope="col">Juicio</th>
                    <th scope="col"><span>Imputados</span>
                    </th>
                    <th scope="col"><span>Victimas</span> 
                    </th>
                    <th scope="col"><span>Testigos</span> 
                    </th>
                    
                    <th scope="col"><span>Rol</span> 
                    </th>
                    <th scope="col"><span>Ficha</span> 
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="j in juicios">
                    <td>{{j.jurisdiccion}}</td>
                    <td>{{j.caus_nombre_vulgar}}</td>
                    <td>{{j.cant_imputados}}</td>
                    <td>{{j.cant_victimas}}</td>
                    <td>{{j.testigos}}</td>
                    <td>{{j.caus_rolsdh?"SI":""}}</td>
                    <td><a href="/causa.php/?id={{j.caus_id}}/">Ver ficha</a></td>
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