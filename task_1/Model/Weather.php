<?php
class Weather  {


private $url;

public function __construct() {
   
}

public function get_cities() {
    $egyption_cities = [];
    $cities = file_get_contents(__CITIES_FILE);
    $cities = json_decode($cities,true);
    foreach ($cities as $city) {
        if (strtolower($city['country']) === 'eg') {
          $egyption_cities[] = $city;
        }
      }
    return $egyption_cities;
}

public function get_weather($cityid) {
    $apiurl="http://api.openweathermap.org/data/2.5/weather?q=".$cityid."&units=metric&APPID=06c834ba50e1be764d91c5cc3cad1f8e";
    $client = new \GuzzleHttp\Client();
    $response = $client->get($apiurl);
    $Data=json_decode($response->getBody(),true);
    return $Data;

}

public function get_current_time() {
    $timestamp = time();
    echo date("D h:i A",$timestamp)."</br>".date("d F, Y ")."</br>";
}

}