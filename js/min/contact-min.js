//fa crescere la text area...
function autoGrow (oField) {
  if (oField.scrollHeight > oField.clientHeight) {
    oField.style.height = oField.scrollHeight + "px";
  }
}

function formSend(){
    var name = $("#name").val();
    var mail = $("#mail").val();
    var message = $("#message").val();

    if($.trim(message) != "" && $.trim(mail) != "" && $.trim(name) != ""){
        $.ajax({
            url: "sendMail.php",
            type: "post",
            data: {
                name: name,
                mail: mail,
                message: message
            }
        }).done(function(result){
            if(result == 1){
                //TODO formattare meglio il messaggio di conferma per l'invio delle mail
                $(".mainButton").parent().append("<span id='result'>OK</span>");
                setTimeout(function(){
                    $("#result").remove();
                }, 2000);
            }
        }).fail(function(){

        });
    }
}


