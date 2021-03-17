'use strict';

angular
.module('app.routes', ['ngRoute'])
.config(function config ($routeProvider) {
        console.log($routeProvider);
        $routeProvider
            .when('/', {
                templateUrl: 'views/home.tpl.html',
                controller: 'HomeController as HomeController',
            })
            .when('/ficha', {
                templateUrl: 'views/ficha.tpl.html',
                controller: 'FichaController as FichaController',
            })
            .otherwise({
                redirectTo: '/',
            });
    }
);
