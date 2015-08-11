MainSite = angular.module('MainSite', ['ngAnimate']);
MainSite.directive("scroll", function ($window) {
    return function(scope, element, attrs) {
        angular.element($window).bind("scroll", function() {
             if (this.pageYOffset >= 100 & this.innerWidth > 600) {
                 scope.boolChangeClass = true;
                 console.log('Scrolled below header.');
             } else {
                 scope.boolChangeClass = false;
                 console.log('Header is in view.');
             }
            scope.$apply();
        });
    };
});
MainSite.directive('clickAnywhereButHere', ['$document', function ($document) {
    return {
        link: function postLink(scope, element, attrs) {
            var onClick = function (event) {
                var isChild = $(element).has(event.target).length > 0;
                var isSelf = element[0] == event.target;
                var isInside = isChild || isSelf;
                if (!isInside) {
                    scope.$apply(attrs.clickAnywhereButHere)
                }
            }
            scope.$watch(attrs.isActive, function(newValue, oldValue) {
                if (newValue !== oldValue && newValue == true) {
                    $document.bind('click', onClick);
                }
                else if (newValue !== oldValue && newValue == false) {
                    $document.unbind('click', onClick);
                }
            });
        }
    };
}]);

/*
MainSite.config(['$compileProvider', function ($compileProvider) {
    $compileProvider.debugInfoEnabled(false);
}]);*/
MainSite.controller('agentCtrl', function($scope,$http) {
	$scope.Agents=[];
	$scope.index=0;
	$http.get('../phpscripts/GetAgents.php').success(function(data){
		$scope.Agents = data;
	});
	$scope.setindex = function(index) {
     $scope.index=index;
     }
});