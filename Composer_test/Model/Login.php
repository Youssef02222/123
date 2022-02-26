<?php

class Login
{
    static  function is_login(){
        if(isset($_SESSION["id"]) && is_numeric($_SESSION["id"])){
            return true;
        }
        else{
            return false;
        }
    }
}