var $ = jQuery.noConflict();
var URL_PREFIX = "http://api.juiciosdelesahumanidad.ar/api/v1.0/"; 
var genApp = angular.module('genApp', ['app.routes', 'app.core' , 'app.services', 'app.auth', 'ngRoute']);
// genApp.constant('apiConstants',{ API_URL: 'https://1fxtrwjbb5.execute-api.us-east-1.amazonaws.com/dev/api' });
genApp.run(function($rootScope, $timeout, $location) {
  $rootScope.$on("$routeChangeStart", function(event, next, current) {
    // var url = $location.url();
  });
});


