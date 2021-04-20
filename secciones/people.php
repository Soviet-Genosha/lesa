
<section class="text-center"   id="parentPeopleVIZ" ng-controller="PeopleController as homeCtrl">
    <div class="container p-0">
            <div class="title text-center">
                <h3>Acusados</h3>
            </div>
            <div class="subtitle mt-md-4 col-lg-8 offset-lg-2 text-left" >
                <p>Este gráfico permite analizar la situación de los acusados en cada juicio y medir la evolución de quienes resultan desafectados por razones de salud o fallecimiento.</p>
            </div>
            
            <div class="d-block d-sm-none clearfix"><i class="fa fa-arrow-right" ></i></div>
            <div class="p-0 mb-3 mb-md-5 m-0" id="datavizPeople" >
            

              
            </div>


            <div class="row text-center mx-0 d-flex justify-content-center">
                <div class="px-2">Referencias:
                </div>
                <div class="px-2">
                    <i class="fa fa-circle" style="color:#6a7501"></i> Procesado
                </div>
                <div class="px-2">
                    <i class="fa fa-circle" style="color:#ddd"></i> Incapacitado
                </div>
                <div class="px-2">
                    <i class="fa fa-circle" style="color:#aaa"></i> En rebeldia
                </div>
                <div class="px-2">
                    <i class="fa fa-circle" style="color:#777"></i> Fallecido
                </div>

            </div>
    </div>
</section>