$(document).ready(function() {
    $('#fullpage').fullpage({
        scrollOverflow: true,
		anchors: ['about', 'whatido', 'mycv'],
		afterLoad: function(anchorLink, index, slideAnchor, slideIndex){
			if(index == 1){
                $(".section.first").addClass("loaded");
            }

            if(index == 2){
				if(!$(".section.second").hasClass("loaded")){
                    $(".section.second").addClass("loaded");
                    animateBorderDiv(".section.second .centerBlock", "2s", "4s");
                }
            }
            if(index == 3){
                $(".section.third").addClass("loaded");
                animateBorderDivThird(".section.third .centerBlock", "2s", "4s");
            }
			$(".breadCrumbs span").removeClass("active");
			$(".breadCrumbs span." + anchorLink).addClass("active");
		},
    });
});

$(document).on("animationFinished", function(){
    if($(".section.second").hasClass("loaded")){
        $(".section.second .centerBlock, .section.second .secondCenteredBlock").css("opacity", 1);
        setTimeout(function(){
            $(".section.second .svgElement").hide();
        }, 1000);
    }

    if($(".section.third").hasClass("loaded")){
        $(".section.third .centerBlock").css("opacity", 1);
        setTimeout(function(){
            $(".section.third .svgElement").hide();
        }, 1000);
    }
});
