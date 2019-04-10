// Create module
var myApp = angular.module("myTaskList", []);

// Create controller
myApp.controller("myTaskController", function ($scope) {
  // Initialization of some sample items
  var todo = [
    {name: 'Task 1', desc: 'Token task 1', check: true, prio: 'NORMAL'},
    {name: 'Task 2', desc: 'Token task 2', check: false, prio: 'URGENT'},
    {name: 'Task 3', desc: 'Token task 3', check: true, prio: 'ON HOLD'}
  ];

  // Add to $scope
  $scope.todo = todo;

  // Add tasks
  $scope.addTask = function() {
    // Check if the form has a task name before creating a new task
    // NOTE: The form uses angular validation so this is not strictly necessary,
    // however I'm leaving it here as redundant safety measure and also to
    // show an alternate way of checking for an empty form
    if (($scope.newTask.name != '') && ($scope.newTask.desc != '')) {
      // Push new item to 'todo' array
      $scope.todo.push(
        {
        name: $scope.newTask.name,
        desc: $scope.newTask.desc,
        check: false,
        prio: $scope.newTask.prio
        }
      );
      console.log('Task added.');

      // Reset the values in the form
      $scope.newTask.name = '';
      $scope.newTask.desc = '';
      $scope.newTask.prio = '0';
    }
    else {
      message = 'Name and/or description field empty!';
      console.log(message);
      alert(message);
    }
  };

  // Duplicate tasks
  $scope.duplicateTask = function($index) {
    $scope.todo.push(
      {
      name: $scope.todo[$index].name,
      desc: $scope.todo[$index].desc,
      check: $scope.todo[$index].check,
      prio: $scope.todo[$index].prio
      }
    );
    console.log('Task duplicated.');
  };

  // Delete tasks
  $scope.deleteTask = function($index) {
    $scope.todo.splice($index, 1);
    console.log('Task deleted.');
  };
});
