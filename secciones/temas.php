<div class="categories mt-4 mt-md-5" ng-controller="CategoriesController as homeCtrl">
    <div class="container">
        <div class="title text-center">
            <h3>Los grandes temas</h3>
        </div>
        <div class="subtitle mt-md-4">
            <p>La mayoría de los juicios orales por crímenes de lesa humanidad analiza las responsabilidades de las Fuerzas Armadas y de Seguridad por los secuestros, desapariciones forzadas, ejecuciones y torturas. En algunos de ellos, además, aparecen otras temáticas que evidencian las nuevas agendas de los juicios: la violencia sexual, los delitos por motivación económica y las complicidades civiles.</p>
        </div>
         <div ng-show="loading">
                            <progress class="loader-mail pure-material-progress-linear" />
                        </div>
        <div id="categories" class="g categories" ng-hide="loading">
           
        </div>
    </div>
</div>