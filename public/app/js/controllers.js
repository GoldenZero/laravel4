angular.module('myApp')
    .controller('loginController',function($scope,$sanitize,$location,Authenticate,Flash){
        $scope.login = function(){
            Authenticate.save({
                'email': $sanitize($scope.email),
                'password': $sanitize($scope.password)
            },function() {
                $location.path('/home')
                Flash.clear()
                sessionStorage.authenticated = true;
            },function(response){
                Flash.show(response.flash)
            })
        }
})
    .controller('homeController',function($scope,$location,Authenticate, Drivers,Flash){
        
        if (!sessionStorage.authenticated){
            $location.path('/')
            Flash.show("you should be authenticated to access this page")
        }

        Drivers.get({},function(response){
            $scope.drivers = response.drivers
        })
        $scope.logout = function (){
            Authenticate.get({},function(response){
                delete sessionStorage.authenticated
                Flash.show(response.flash)
                $location.path('/')
            })
        }
    })