'use strict';

app.controller('LoginController', ['$scope','loginService','$location', function ($scope, loginService, $location) {
	$scope.user = {'user':'','password':''}
    $scope.msgtxt = '';

    $scope.login = function(data){
        loginService.login(data).then(
            function(response){
                if ( response.data.error ) {
                	$scope.msgtxt = response.data.msg ;
                }
                else{
                	$location.path('/home') ;
                }
            }
        );
    };

}]);