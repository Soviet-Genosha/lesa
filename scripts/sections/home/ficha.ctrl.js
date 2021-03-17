'use strict';
angular
    .module('app.core')
    .controller('FichaController', function($scope, medService) {
        $scope.medService = medService;
    });
