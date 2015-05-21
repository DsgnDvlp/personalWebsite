$(document).ready(function() {
    $('#fullpage').fullpage({ 
        scrollOverflow: true,
		anchors: ['about', 'whatido', 'mycv'],
		afterLoad: function(anchorLink, index, slideAnchor, slideIndex){
			if(index == 2){
				$(".section.second").addClass("loaded");
			}
			$(".breadCrumbs span").removeClass("active");
			$(".breadCrumbs span." + anchorLink).addClass("active");
		},
    });
});


