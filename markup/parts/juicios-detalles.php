<div class="juicios-detalle mt-5" ng-controller="JuiciosController as homeCtrl">
    <div class="container">
        <table class="table">
            <colgroup>
                <col>
                <col>
                <col>
                <col>
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Nombre del juicio</th>
                    <th scope="col"><span>Jurisdicción</span> <img src="/images/sort-table.svg" alt="" /></th>
                    <th scope="col"><span>Imputados</span> <img src="/images/sort-table.svg" alt="" />
                    </th>
                    <th scope="col"><span>Testigos</span> <img src="/images/sort-table.svg" alt="" />
                    </th>
                    
                    <th scope="col"><span>Victimas</span> <img src="/images/sort-table.svg" alt="" />
                    </th>
                    <th scope="col"><span>Rol</span> <img src="/images/sort-table.svg" alt="" />
                    </th>
                    <th scope="col"><span>Estado</span> <img src="/images/sort-table.svg" alt="" />
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="j in juicios">
                    <td>{{j.caus_nombre_vulgar}}</td>
                    <td>{{j.jurisdiccion}}</td>
                    <td>{{j.cant_imputados}}</td>
                    <td>{{j.testigos}}</td>
                    <td>{{j.cant_victimas}}</td>
                    <td>{{j.caus_rolsdh}}</td>
                    <td>{{j.estado_causa}}</td>
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