<div class="categories mt-4 mt-md-5" ng-controller="CategoriesController as homeCtrl">
    <div class="container">
        <div class="title text-md-center">
            <h3>Juicios activos Categorías</h3>
        </div>
        <div class="subtitle mt-md-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat. </p>
        </div>
         <div ng-show="loading">
                            <progress class="loader-mail pure-material-progress-linear" />
                        </div>
        <div id="categories" class="g categories" ng-hide="loading">
           
        </div>
    </div>
</div>