var ManageAgents = angular.module('ManageAgents', ['ngAnimate','ngRoute', 'ui.router','textAngular','ui.bootstrap','xeditable']);


ManageAgents.config(function($stateProvider, $urlRouterProvider){
      
      // For any unmatched url, send to /route1
      $urlRouterProvider.otherwise("/");
      
      $stateProvider
        .state('SendEmails', {
            url: "/SendEmail",
            templateUrl: "Test/index.php",
		  	controller: 'emailCtrl'
        })
          
        .state('ManageAgents', {
            url: "/AgentList",
            templateUrl: 'ManageAgents/index.html',
		  	controller: 'userCtrl'
        })
	  	.state('AgentToDoList', {
            url: "/ToDoList",
            templateUrl: 'ToDo2/index2.html',
		  	controller: 'userCtrl'
        });
       
    });
ManageAgents.controller('userCtrl', function($scope,$http,$modal) {
$scope.fName = '';
$scope.lName = '';
$scope.passw1 = '';
$scope.passw2 = '';
$scope.SideBarVis ='one';
$scope.showEmail = 'all';
$scope.Emails = [];
$scope.showPopup = function (email) {
	
	
    var modalInstance = $modal.open({
      templateUrl: 'myModalContent.html',
      controller: 'ModalInstanceCtrl',
      size: 'lg',
      resolve: {
        items: function () {
          return email;
        }
      }
    });

    
  };
   
$http.get('../../../../../Test/index.php').success(function(data){

		$scope.Emails = data;
	});
$scope.scoreClass = function(SideBarVis) {
    return SideBarVis == 'two' ? 'reposition': 'ok';
};
$scope.users = [
{id:1, fName:'Hege',  lName:"Pege", Email:"",HireDate:"Sep 1 1989",UserName:"",Password:"" },
{id:2, fName:'Kim',   lName:"Pim", Email:"",HireDate:"Sep 1 1989",UserName:"",Password:"" },
{id:3, fName:'Cody',   lName:"Johnson", Email:"",HireDate:"Sep 1 1989",UserName:"codysj",Password:"skiutah4969" },
{id:4, fName:'Sherry',  lName:"Johnson", Email:"sherry@anpac.net",HireDate:"Sep 1 1989",UserName:"sherry@anpac.net",Password:"skibum" },
{id:5, fName:'Scott',  lName:"Johnson", Email:"",HireDate:"Sep 1 1989",UserName:"",Password:"" },
{id:6, fName:'Dave', lName:"Hogan", Email:"",HireDate:"Sep 1 1989",UserName:"",Password:"" }
];
$scope.edit = true;
$scope.error = false;
$scope.incomplete = false; 

$scope.editUser = function(id) {
  if (id == 'new') {
    $scope.edit = true;
    $scope.incomplete = true;
    $scope.fName = '';
    $scope.lName = '';
    } else {
    $scope.edit = false;
    $scope.fName = $scope.users[id-1].fName;
    $scope.lName = $scope.users[id-1].lName; 
  }
};

$scope.$watch('passw1',function() {$scope.test();});
$scope.$watch('passw2',function() {$scope.test();});
$scope.$watch('fName', function() {$scope.test();});
$scope.$watch('lName', function() {$scope.test();});

$scope.test = function() {
  if ($scope.passw1 !== $scope.passw2) {
    $scope.error = true;
    } else {
    $scope.error = false;
  }
  $scope.incomplete = false;
  if ($scope.edit && (!$scope.fName.length ||
  !$scope.lName.length ||
  !$scope.passw1.length || !$scope.passw2.length)) {
       $scope.incomplete = true;
  }
};

});

ManageAgents.controller('emailCtrl', function($scope,$http) {	
$scope.EmailStatus = 'none';
$scope.emailgeneric = function(newEmail) {
		var formData = { to: newEmail.emailto, from : newEmail.emailfrom,subject:newEmail.Subject, message: newEmail.message, cusName: newEmail.cusName,yName:newEmail.yName};
		var postData = 'datas='+JSON.stringify(formData);
		$http({
				method : 'POST',
				url : '/Admin/ManagmentPortal/AngularApp/Partials/Emails/php/GenericSend.php',
				data: postData,
				headers : {'Content-Type': 'application/x-www-form-urlencoded'}  
		});
		$scope.EmailStatus = "sent";
	};
});
ManageAgents.controller('ModalInstanceCtrl', function ($scope, $modalInstance, items) {

  $scope.Currentemail = items;

  $scope.closePopup = function () {
     $modalInstance.dismiss('cancel');
  };
  

});
ManageAgents.controller('EditableRowCtrl', function($scope, $filter, $http) {
  $scope.users = []
    
  $http.get('/phpscripts/GetAgents.php').success(function(data){
		$scope.users = data;
	});

   
  $scope.saveUser = function(data, id) {
	  angular.extend(data, {id: id});
	  var formData = {agentid: data.id, fname : data.fname,lname:data.lname,email:data.email,phone:data.phone,adress:data.adress,city:data.city,state:data.state};
		var postData = 'datas='+JSON.stringify(formData);
		$http({
				method : 'POST',
				url : '/phpscripts/updateagent.php',
				data: postData,
				headers : {'Content-Type': 'application/x-www-form-urlencoded'}  
		});
  };

  // remove user
  $scope.removeUser = function(index) {
    $scope.users.splice(index, 1);
  };

  // add user
  $scope.addUser = function() {
    $scope.inserted = {
      id: $scope.users.length+1,
      name: '',
      status: null,
      group: null 
    };
    $scope.users.push($scope.inserted);
  };
});