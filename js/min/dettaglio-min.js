$(document).ready(function() {
    // $(".royalSlider").royalSlider({
    //     // options go here
    //     // as an example, enable keyboard arrows nav
    //     keyboardNavEnabled: false,
    //     arrowsNav: false,
    //     loop: true,
    //     autoplay:{
    //         enabled: true,
    //         stopAtAction: false,
    //         pauseOnHover: false
    //     }
    // });

    $(window).scroll(function(){
        if($("body").scrollTop() > 0){
            $(".menuRow").addClass("sticky");
        }else{
            $(".menuRow").removeClass("sticky");
        }
    });
});


