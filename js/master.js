$(document).ready(function(){
//    $("select").material_select();
//    $(".languageBar select").change(function(val){
//        switchLanguage(val);
//    });
    
    $(".dropdown-button").dropdown({
        inDuration: 400,
        outDuration: 200,
        constrain_width: true,
        hover: true,
        alignment: 'left',
        gutter: 0,
        belowOrigin: false
    });
});

function switchLanguage(language){
    $.ajax({
        url: "switchLanguage.php",
        type: "post",
        data:{
            language: language
        }
    }).done(function(){
        location.reload();
    });
}