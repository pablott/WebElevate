// Create module
var myApp = angular.module("myTaskList", []);

// Create controller
myApp.controller("myTaskController", function ($scope) {
    var todo = [
        {name: 'Task 1', desc: 'Description'},
        {name: 'Task 2', desc: 'Description'},
        {name: 'Task 3', desc: 'Description'}
    ];

    // Add to $scope
    $scope.todo = todo;

    // Add tasks
    $scope.addTask = function() {
        $scope.todo.push(
            {
                name: $scope.newTask.name,
                desc: $scope.newTask.desc
            }
        );
    };

    // Duplicate tasks
    $scope.duplicateTask = function($index) {
        $scope.todo.push(
            {
                name: $scope.todo[$index].name,
                desc: $scope.todo[$index].desc
            }
        );
    };

    // Delete tasks
    $scope.deleteTask = function($index) {
        $scope.todo.splice($index, 1); // pos,
    };

});