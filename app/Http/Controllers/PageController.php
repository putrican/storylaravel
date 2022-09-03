<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Province;
use App\City;

class PageController extends Controller
{
    public function getprovince(){
        $client = new Client();

        try {
            $response = $client->get('https://api.rajaongkir.com/starter/province',[
                'headers' => ['key' => '87ed288ad60198229ec1596033477543']
            ]);
        } catch (RequestException $e) {
            var_dump($e->getResponse()->getBody()->getContents());
        }
        $json = $response->getBody()->getContents();

        $array_result = json_decode($json, true);

        // print_r($array_result);
        for($i = 0;$i < count($array_result["rajaongkir"]["results"]); $i++){
            $province = new Province;
            $province->id = $array_result["rajaongkir"]["results"][$i]["province_id"];
            $province->name = $array_result["rajaongkir"]["results"][$i]["province"];
            $province->save();
            echo "Berhasil tersimpan ke table";
        }
    }

    public function getcity(){
        $client = new Client();

        try {
            $response = $client->get('https://api.rajaongkir.com/starter/city',[
                'headers' => ['key' => '87ed288ad60198229ec1596033477543']
            ]);
        } catch (RequestException $e) {
            var_dump($e->getResponse()->getBody()->getContents());
        }
        $json = $response->getBody()->getContents();

        $array_result = json_decode($json, true);

        // print_r($array_result);
        for($i = 0; $i < count($array_result["rajaongkir"]["results"]); $i++){
            $city = new City;
            $city->id = $array_result["rajaongkir"]["results"][$i]["city_id"];
            $city->name = $array_result["rajaongkir"]["results"][$i]["city_name"];
            $city->province_id = $array_result["rajaongkir"]["results"][$i]["province_id"];
            $city->save();
            echo "Berhasil tersimpan ke table";
        }
    }

    public function checkshipping(){
        $city = City::get();

        return view('jne.check-shipping', compact('city'));
     
    }


    public function processhipping(Request $request){
        $client = new Client();

        try {
            $response = $client->post('https://api.rajaongkir.com/starter/cost',[
                'body' => 'origin='.$request->origin.'&destination='.$request->destination.'&weight='.$request->weight.'&courier=jne',
                'headers' => [
                    'key' => '87ed288ad60198229ec1596033477543',
                    'content-type' => 'application/x-www-form-urlencoded'
                    ]
            ]);
        } catch (RequestException $e) {
            var_dump($e->getResponse()->getBody()->getContents());
        }
        $json = $response->getBody()->getContents();

        $array_result = json_decode($json, true);

        // print_r($array_result);
        $origin = $array_result["rajaongkir"]["origin_details"]["city_name"];
        $destination = $array_result["rajaongkir"]["destination_details"]["city_name"];

        return view('jne.check-shipping-result', compact('origin','destination','array_result'));

     }
}
