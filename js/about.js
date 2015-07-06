$(document).ready(function() {
    $('#fullpage').fullpage({
        scrollOverflow: true,
		anchors: ['about', 'whatido', 'mycv'],
		afterLoad: function(anchorLink, index, slideAnchor, slideIndex){
			if(index == 2){
				$(".section.second").addClass("loaded");
        animateBorderDiv(".section.second .centerBlock", "2s", "4s");
			}
			$(".breadCrumbs span").removeClass("active");
			$(".breadCrumbs span." + anchorLink).addClass("active");
		},
    });
});

$(document).on("animationFinished", function(){
  $(".section.second .centerBlock").css("opacity", 1);
  setTimeout(function(){
    $(".svgElement").hide();
  }, 1000);
});
