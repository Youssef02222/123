<?php
use Illuminate\Database\Capsule\Manager as Handler;
class DatabaseHandler{
    
    
    static public function connect(){
        $data = new Handler();
        $data->addConnection([
        "driver" => _driver_,
        "host" => _host_,
        "database" => _database_,
        "username" => _username_,
        "password" => _password_
    ]);
    $data->setAsGlobal();
    $data->bootEloquent();
    }
    static public function get_data($start = 0){
        $all_requrds = Handler::table("items")->skip($start)->take(_Pager_size_)->get();
        return $all_requrds;
    }
    //public function disconnect();   
    static public function get_record_by_id($id){
        $searched_glasses = Handler::table('items')->find($id);
        return $searched_glasses;
    }
    
    
}