jQuery(document).ready(function($){
	var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;

	//open team-member bio
	$('#cd-team').find('ul a').on('click', function(event){
		event.preventDefault();
		var selected_member = $(this).data('type');
		$('.cd-member-bio.'+selected_member+'').addClass('slide-in');
		$('.cd-member-bio-close').addClass('is-visible');

		// firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( is_firefox ) {
			$('main').addClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').addClass('overflow-hidden');
			});
		} else {
			$('main').addClass('slide-out');
			$('body').addClass('overflow-hidden');
		}

	});
	$('#open-bio').on('click', function(event){
		event.preventDefault();
		var selected_member = $(this).data('type');
		$('.cd-member-bio.'+selected_member+'').addClass('slide-in');
		$('.cd-member-bio-close').addClass('is-visible');

		// firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( is_firefox ) {
			$('main').addClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').addClass('overflow-hidden');
			});
		} else {
			$('main').addClass('slide-out');
			$('body').addClass('overflow-hidden');
		}

	});


	//close team-member bio
	$(document).on('click', '.cd-overlay, .cd-member-bio-close', function(event){
		 var appElement = document.querySelector('[ng-app=MainSite]');
		 var $scope = angular.element(appElement).scope();
		 $scope.$apply(function() {
        $scope.index = 0;
    });

		event.preventDefault();
		$('.cd-member-bio').removeClass('slide-in');
		$('.cd-member-bio-close').removeClass('is-visible');

		if( is_firefox ) {
			$('main').removeClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').removeClass('overflow-hidden');
			});
		} else {
			$('main').removeClass('slide-out');
			$('body').removeClass('overflow-hidden');
		}
	});
	
	$(document).mouseup(function (e)
{
    var container = $(".cd-member-bio");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
	     var appElement = document.querySelector('[ng-app=MainSite]');
		 var $scope = angular.element(appElement).scope();
		 $scope.$apply(function() {
        $scope.index = 0;
    });
        event.preventDefault();
		$('.cd-member-bio').removeClass('slide-in');
		$('.cd-member-bio-close').removeClass('is-visible');

		if( is_firefox ) {
			$('main').removeClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').removeClass('overflow-hidden');
			});
		} else {
			$('main').removeClass('slide-out');
			$('body').removeClass('overflow-hidden');
		}
    }
});
	
});

