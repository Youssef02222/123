<?php
require_once("vendor/autoload.php");
session_start();

// use Illuminate\Database\Capsule\Manager as dB;

$db = new DatabaseHandler();
$db->connect();

// $db = new dB();
//         $db->addConnection([
//         "driver" => _driver_,
//         "host" => _host_,
//         "database" => _database_,
//         "username" => _username_,
//         "password" => _password_
//     ]);
//     $db->setAsGlobal();
//     $db->bootEloquent();

$api = new API($db);