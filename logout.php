
<?php 
require_once "init.php";

if(isPostRequest()){

    
    session_destroy();
    redirect("index.php");

}else{
    redirect("index.php");
    exit;
}