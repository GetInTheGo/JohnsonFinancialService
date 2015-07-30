var app = angular.module('todolist', ['ui']);

app.directive('ngBlur', function() {
	return function(scope, elem, attrs) {
		elem.bind('blur', function() {
			scope.$apply(attrs.ngBlur);
		});
	}
});

app.controller('ToDoCtrl', function($scope, filterFilter, $http, $location) {
	
	// Initializing vars
	$scope.todos = [];
	$scope.applicants = [];
	
	$scope.statusFilter = {};
	$scope.placeholder = 'Chargement ...';
	    
	    
	// Getting all the tasks in database
	$http.get('./functions/getTask.php').success(function(data){
		$scope.todos = data;
		$scope.placeholder = 'Add New Task';
	});
	$http.get('./functions/getApplicants.php').success(function(data){
		$scope.applicants = data;
	});
	
	// The $watch function count remaining tasks with a filter on "completed"
	$scope.$watch('todos', function() {
		$scope.remaining = filterFilter($scope.todos, {completed:false}).length;
		$scope.completed = filterFilter($scope.todos, {completed:true}).length;
		$scope.allchecked = !$scope.remaining;
	}, true);
	
	// Routes management
	if($location.path() == '') {$location.path('/')};
	$scope.location = $location;
	$scope.$watch('location.path()', function(path) {
		$scope.statusFilter = 
			(path == '/active') ? {completed:false} : // If the path = 'active', we only show active tasks
			(path == '/done') ? {completed : true} :  // ... Finished tasks here
			null; // If the path is empty, whe show all of the tasks.
	});
	
	// Adding a task
	$scope.addTodo = function() {
		var formData = { name: $scope.newtodo.name, completed : false, priority: $scope.newtodo.priority };
		var postData = 'datas='+JSON.stringify(formData);
		$http({
				method : 'POST',
				url : './functions/addTask.php',
				data: postData,
				headers : {'Content-Type': 'application/x-www-form-urlencoded'}  
		}).success(function(id){
			$scope.todos.push({
				id: id,
				name: $scope.newtodo.name,
				completed: false,
				priority: $scope.newtodo.priority
			});
			$scope.newtodo.name = ''; // Resets the name's field
			$scope.newtodo.priority = 'low'; // Resets the priority
		}).error(function(error){
			alert(error);
        });
	}
	
	// Editing a task
	$scope.editTodo = function(todo) {
		var formData = { id: todo.id, name: todo.name, priority: todo.priority};
		var postData = 'datas='+JSON.stringify(formData);
		$http({
				method : 'POST',
				url : './functions/editTask.php',
				data: postData,
				headers : {'Content-Type': 'application/x-www-form-urlencoded'}  
		}).success(function(res){
			todo.editing = false;
		}).error(function(error){
			alert(error);
        });
	}
	
	// Check all the tasks
	$scope.checkAll = function(allchecked) {
		$http.get('./functions/checkAllTasks.php?completed=' + !allchecked).success(function(data){
			$scope.todos.forEach(function(todo) {
				todo.completed = !allchecked;
			});
		});
	}
	
	// Check/Uncheck a task
	$scope.checkTodo = function(todo) {
		var formData = { id: todo.id, completed: !todo.completed };
		var postData = 'datas='+JSON.stringify(formData);
		$http({
				method : 'POST',
				url : './functions/checkTask.php',
				data: postData,
				headers : {'Content-Type': 'application/x-www-form-urlencoded'}  
		}).error(function(error){
			alert(error);
        });
	}	
	
		
	// Removing a task
	$scope.removeTodo = function(id) {
		$http.get('./functions/deleteTask.php?id=' + id).success(function(data){
			var index = $scope.todos.map(function(e) { return e.id; }).indexOf(id);
			$scope.todos.splice(index, 1);
		});
	}
	
	// Delete all completed tasks
	$scope.clearCompleted = function() {
		$scope.todos.forEach(function(todo) {
			if(todo.completed) {
				$http.get('./functions/deleteTask.php?id=' + todo.id).success(function(data){
					var index = $scope.todos.map(function(e) { return e.id; }).indexOf(todo.id);
					$scope.todos.splice(index, 1);
				 });
			}
		});
	}

});

