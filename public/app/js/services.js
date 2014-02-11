angular.module('myApp')
    .factory('Authenticate', function($resource){
        return $resource("/service/authenticate/")
    })
    .factory('Drivers', function($resource){
        return $resource("/service/drivers")
    })
    .factory('Flash', function($rootScope){
        return {
            show: function(message){
                $rootScope.flash = message
            },
            clear: function(){
                $rootScope.flash = ""
            }
        }
    })