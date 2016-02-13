'use strict';

app.controller('HomeController', function($scope, loginService, userService, $location){
	$scope.msgtxt = '';
    function getUser(){
		loginService.getSession().then(
            function(response) {
				var id = response.data ;
				if (id === '') {
					$location.path('/login') ;
				}
				else{
					userService.get_by_id(id).then(
						function(response){
							if (response.data.error == true) {
								$scope.msgtxt = response.data.msg;
							}
							else{
								$scope.user = response.data.data[0] ;
							}
						}
					);
				}
            }
		);
    };

    getUser() ;

    $scope.logout = function(){
        loginService.logout();
    }
});