//alert();
var myApp = angular.module('myApp', ['ngRoute']);


myApp.config(['$routeProvider', function($routeProvider){
    $routeProvider
        .when('/', {
            templateUrl: 'partials/basic-template.html',
            controller: 'BasicController'
        })
        .when('/faq', {
            templateUrl: 'partials/faq.html',
            controller: 'BasicController'

        })
        .otherwise({
            redirectTo: '/'
        });
}]);


myApp.controller('MainController', function($scope, $location) {
    $scope.setRoute = function (route) {
        alert(route);
        $location.path(route);
    }
});


myApp.controller("BasicController", function ($scope) {
    //alert('controller');
    $scope.title = 'This is the title';
    $scope.body = 'This is the body';
});