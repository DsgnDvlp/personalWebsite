<?

$message = "mail from ".$_POST["name"]." [ ".$_POST["mail"]." ]\r\n Message: \r\n ".$_POST["message"];

echo mail( "michele@igenius.net" , "Mail from ".$_POST["name"] , $message );

?>
