'use strict';

app.service('loginService', function($http, $location){

	this.login = function(data){
        return $http.post('data/ajax/user/login.php', data);
	};

	this.isLogin = function(){
        $http.get('data/ajax/user/isLogin.php').then(
            function(response){
                if (response.data === '') {
                    $location.path('/login') ;
                }
            }
        );
	};

    this.getSession = function(){
        return $http.get('data/ajax/user/isLogin.php');
    };

	this.logout = function(){
        $http.get('data/ajax/user/logout.php').then(
            function(response){
                $location.path('/login');
            }
        );
	};

});