<?php
/*//open session and loading the composer
session_start();
require_once("vendor/autoload.php");

//validate parameters and authenticate
if (isset($_POST["username"])) {
    if (Login::Authenticate($_POST["username"], $_POST["password"]))
        $_SESSION["userid"] = 5;
       // header("Location: index.php?page=user");
             $page = "user";

    
} else {
    //checking logging status
    if (!Login::check_login()) {
        $page = "login";
    } else {
        //calling my logic
        $my_user = new User("admin", "admin123", "engakarim@gmail.com");
        //routing
        $pages = array("login", "user");
        $page = (isset($_GET["page"]) && in_array($_GET["page"], $pages)) ?
                $_GET["page"] : "login";
    }
}
    //return response view
    require_once("views/$page.php");*/
session_start();
require_once ("vendor/autoload.php");
$page="login";
if(isset($_POST["send"])){
    if($_POST["username"]==correct_user && $_POST["password"]==correct_pass){

        if(!isset($_SESSION["id"])){
            $_SESSION["id"]=5;
            $file=file("log.txt");
            $file=fopen("log.txt","a+");
            $var="hello";
            fwrite($file,$var.PHP_EOL);
            fclose($file);
        }




    }
}



if(Login::is_login()){
$page="user";
}
else{
    $page="login";
}

$myuser= new User("يوسف","باسورد","ايميل");
//var_dump($myuser);
$pages=array("user","login");
//$page=(isset($_GET["page"]) && in_array($_GET["page"],$pages)) ? $_GET["page"] : "login";
require_once ("views/$page.php");
?>






