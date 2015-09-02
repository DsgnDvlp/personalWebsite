
var currentFilter = null;

$(document).ready(function(){
    $grid = $('.grid').isotope({
        // options
        itemSelector: '.gridItem',
        layoutMode: 'fitRows'
    });

    $(".breadCrumbs span").click(function(){
        var filter = $(this).data("filter");
        if(filter == currentFilter){
            //caso in cui sto disabilitando il filtro.
            $grid.isotope({filter: "*"});
            currentFilter = null;
            $(".breadCrumbs span").removeClass("active");
        }else{
            $grid.isotope({filter: "."+filter});
            currentFilter = filter;
            $(".breadCrumbs span").removeClass("active");
            $(this).addClass("active");
        }
    });
});


