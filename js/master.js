$(document).ready(function(){
//    $(".languageBar").hover(function(){
//        $("languageBar").toggleClass("opened");
//    },function(){
//        $("languageBar").toggleClass("opened");
//    });
//    
//    $(".languageBar").click(function((){
//        if('ontouchstart' in document.documentElement){
//            alert("touch");
//        }
//    }));
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