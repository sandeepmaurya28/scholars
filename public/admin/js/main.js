$(document).ready(function($){

	var tabItems = $('.sidebar-menu li'),
		tabContentWrapper = $('.cd-tabs-content');

	tabItems.on('click', function(event){
		event.preventDefault();
		var selectedItem = $(this);
		if( !selectedItem.hasClass('active') ) {
			var selectedTab = selectedItem;
			
			tabItems.removeClass('active');
			selectedItem.addClass('active');
			
			//animate tabContentWrapper height when content changes 
			
		}
		
	});
});