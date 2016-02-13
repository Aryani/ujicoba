'use strict';

var app = angular.module('myApp', ['ngRoute']);

app.config(['$routeProvider', function($routeProvider) {
	$routeProvider.when('/login', {
		templateUrl: 'partials/login.html',
		controller: 'LoginController'
	});
	$routeProvider.when('/home', {
		templateUrl: 'partials/home.html',
		controller: 'HomeController'
	});
	$routeProvider.otherwise({
		redirectTo: '/login'
	});
}]);

app.run(['$rootScope', '$location', 'loginService', function($rootScope, $location, loginService){
	// rutas a las cuales no podra acceder si no se ha logeado
	var permissionRute = ['/home'] ;
	// $on es un desencadenador de eventos
	// $routeChangeStart es un evento que se dispara cuando se canbia la ruta (url)
	$rootScope.$on('$routeChangeStart', function(event, oldUrl, newUrl){
		if ( permissionRute.indexOf($location.path()) != -1  ) {
			loginService.isLogin();
		};
	});
}]);