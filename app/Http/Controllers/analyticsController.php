<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class analyticsController extends Controller
{
    //

    public function index()
    {

        return view('welcome', compact('NewArray'));

    }

    public function analytics()
    {
//dd(Auth::user());
//        if (Auth::user()->hasRole('admin')) {
//            dd('aaaaaaaaaaAA');
//        } else if (Auth::user()->hasRole('manager')) {
            $details = $this->getSensorValues();
            if (array_key_exists('fault', $details)) {
                Session::flash('message', 'Token has been expired.');
                Session::flash('alert-class', 'alert-danger');
                $details = array();
            }
            return view('index', array('details' => $details));
//        }
    }

    public function Login()
    {
//

        return view('Login');
//        return View('welcome', array('total'=>$total));
    }


    public function getSensorValues()
    {
        $newArray = array();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://iotdev.dialog.lk/axt-iot-mbil-instance0001001/apkios/axtitomblebckenddev/latestDeviceStatusByDeviceIddev/2051");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'IotMife-AccessToken: b002a94d-db2e-3e32-b457-95add6090f48',
            'X-Key: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJodHRwczovL2lvdGRldi5kaWFsb2cubGsiLCJleHAiOjE1NTY4NDIwMjcsImlhdCI6MTM1Njk5OTUyNCwiaXNzIjoiaHR0cHM6Ly9pb3RkZXYuZGlhbG9nLmxrIiwianRpIjoiSW90Kjc2NTY2RGlhbG9nIiwibmJmIjoxMzU3MDAwMDAwLCJ0eXAiOiJodHRwczovL2lvdGRldi5kaWFsb2cubGsvYXV0aGVudGljYXRlIiwidXNlcl9pZCI6NTc4NjV9.fEF7BYD04X5Z1nWNvICqKvMEWSy6QXJqnfJZEbfIT1Q',
            'Accept:application/json',
            'Content-Type:application/json'
        ));
        $result = curl_exec($curl);
        curl_close($curl);
        /*echo '<pre>';
         print_r(json_decode($result, true));
         echo '</pre>';*/

        $array = json_decode($result, true);

//        $newArray = $array();
//      print_r($array);


//      print_r($array[0]['parameter']);

        $hu = 0;
        $li = 0;
        $te = 0;
//        dd($array);
        if (!array_key_exists('fault', $array)) {
            foreach ($array as $value) {
                if ('Humidity' == $value['parameter']) {
                    $newArray['humidity'][$hu]['state'] = $value['state'];
                    $newArray['humidity'][$hu]['value'] = $value['value'];
                    $newArray['humidity'][$hu]['time'] = $value['time'];
                    $hu++;
                } else if ('Light' == $value['parameter']) {
//
                    $newArray['light'][$li]['state'] = $value['state'];
                    $newArray['light'][$li]['value'] = $value['value'];
                    $newArray['light'][$li]['time'] = $value['time'];
                    $li++;
                } else {
                    $newArray['temperature'][$te]['state'] = $value['state'];
                    $newArray['temperature'][$te]['value'] = $value['value'];
                    $newArray['temperature'][$te]['time'] = $value['time'];
                    $te++;
                }
            }
        } else {
            $newArray = $array;
        }

        return $newArray;
    }
    public function doAction(){
        $newArray = array();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://iotdev.dialog.lk/axt-iot-mbil-instance0001001/apkios/axtitomblebckenddev/latestDeviceStatusByDeviceIddev/2051");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'IotMife-AccessToken: b002a94d-db2e-3e32-b457-95add6090f48',
            'X-Key: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJodHRwczovL2lvdGRldi5kaWFsb2cubGsiLCJleHAiOjE1NTY4NDIwMjcsImlhdCI6MTM1Njk5OTUyNCwiaXNzIjoiaHR0cHM6Ly9pb3RkZXYuZGlhbG9nLmxrIiwianRpIjoiSW90Kjc2NTY2RGlhbG9nIiwibmJmIjoxMzU3MDAwMDAwLCJ0eXAiOiJodHRwczovL2lvdGRldi5kaWFsb2cubGsvYXV0aGVudGljYXRlIiwidXNlcl9pZCI6NTc4NjV9.fEF7BYD04X5Z1nWNvICqKvMEWSy6QXJqnfJZEbfIT1Q',
            'Accept:application/json',
            'Content-Type:application/json'
        ));
        $result = curl_exec($curl);
        curl_close($curl);
        /*echo '<pre>';
         print_r(json_decode($result, true));
         echo '</pre>';*/

        $array = json_decode($result, true);




    }

    public static function curlCall($url = '', $type, $data, $arrHeader = array(), $tenantCompany=null, $user = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        $type = 'POST';
        $url = "https://iotdev.dialog.lk/axt-iot-mbil-instance0001001/apkios/axtitomblebckenddev/callActiondev";
        $arrHeader[] = "Content-Type:application/json";
        $arrHeader[] = "X-JWT-Assertion:".self::getJWTtoken($tenantCompany, $user);
        $arrHeader[] = "IotMife-AccessToken: b002a94d-db2e-3e32-b457-95add6090f48";
        $arrHeader[] = "X-Key: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdWQiOiJodHRwczovL2lvdGRldi5kaWFsb2cubGsiLCJleHAiOjE1NTY4NDIwMjcsImlhdCI6MTM1Njk5OTUyNCwiaXNzIjoiaHR0cHM6Ly9pb3RkZXYuZGlhbG9nLmxrIiwianRpIjoiSW90Kjc2NTY2RGlhbG9nIiwibmJmIjoxMzU3MDAwMDAwLCJ0eXAiOiJodHRwczovL2lvdGRldi5kaWFsb2cubGsvYXV0aGVudGljYXRlIiwidXNlcl9pZCI6NTc4NjV9.fEF7BYD04X5Z1nWNvICqKvMEWSy6QXJqnfJZEbfIT1Q";
        $arrHeader[] = "Accept:application/json";

        if (count($arrHeader)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
        }

        if ($type == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1); //If not set it will be GET by default
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } elseif ($type == 'PUT') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } elseif ($type == 'DELETE') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } elseif ($type == 'PATCH') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } elseif ($type === 'FILE') {
            curl_setopt($ch, CURLOPT_POST, 1); //If not set it will be GET by default
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = curl_exec($ch);

        dd($output);
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        $return_array = array($http_status, $output);
        Lib::ApiLog(json_encode([
            'url' => $url,
            'type' => $type,
            'body' => $data,
            'code' => $http_status,
            'header' => $arrHeader,
            'error' => $error,
            'response' => ($type == 'GET' && $http_status == 200) ? 'get request response not printed' : $output,
        ]));
        return $return_array;
    }


}
