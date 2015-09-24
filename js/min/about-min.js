$(document).ready(function() {
    $('#fullpage').fullpage({
        scrollOverflow: true,
		anchors: ['about', 'whatido', 'software', 'mycv'],
		afterLoad: function(anchorLink, index, slideAnchor, slideIndex){
			if(index == 1){
                $(".section.first").addClass("loaded");
            }

            if(index == 2){
				if(!$(".section.second").hasClass("loaded")){
                    $(".section.second").addClass("loaded");
                    if($(window).width() > 769){
                        animateBorderDiv(".section.second .centerBlock", "0.8s", ".8s", "s");
                    }
                }
            }
            if(index == 3){
                if(!$(".section.third").hasClass("loaded")){
                    $(".section.third").addClass("loaded");
                    animateBorderDiv(".section.third .centerBlock", ".8s", ".8s", "n");
                }
            }
            if(index == 4){
                if(!$(".section.fourth").hasClass("loaded")){
                    $(".section.fourth").addClass("loaded");
                    animateBorderDivThird(".section.fourth .centerBlock", ".8s", ".8s");
                }
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
        $(".section.third .centerBlock, .section.third .secondCenteredBlock").css("opacity", 1);
        setTimeout(function(){
            $(".section.third .svgElement").hide();
        }, 1000);
    }

    if($(".section.fourth").hasClass("loaded")){
        $(".section.fourth .centerBlock, .section.fourth .secondCenteredBlock").css("opacity", 1);
        setTimeout(function(){
            $(".section.fourth .svgElement").hide();
        }, 1000);
    }

    // if($(".section.fourth").hasClass("loaded")){
    //     $(".section.fourth .centerBlock").css("opacity", 1);
    //     setTimeout(function(){
    //         $(".section.fourth .svgElement").hide();
    //     }, 1000);
    // }
});


