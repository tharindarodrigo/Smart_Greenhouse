<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreenhouseController extends Controller
{
    public function index(){
        return view('create_greenhouse');
//        return view('create_greenhouse', array('details' => $this->getDeviceCount()));
    }


    public function getDeviceCount(){
        $string = file_get_contents(storage_path() . "/templates/scenes_and_devices.json");
        $json_a = json_decode($string, true);

//        return view('testing', array('details' => $json_a));
        return $json_a;
    }

    public function ReceiveDataForm(Request $request)
    {
        //Input::post('name');
        //Input::post('surname');
        $json_a = $this->getDeviceCount();

        return view('testing', array('details' => $json_a));
    }

    public function createGreenHouse(Request $request)
    {
        $newArray = array();
        $plantName = $request->input('plant');
        $ghWidth = $request->input('width');
        $ghHeight = $request->input('height');
        $ghArea = $ghWidth * $ghHeight;

        $deviceDetails = $this->getDeviceCount();

        foreach ($deviceDetails as $deviceDetail){
            $crop = $deviceDetail['input']['crop'];
            $definedMinArea = $deviceDetail['input']['area']['min'];
            $definedMaxArea = $deviceDetail['input']['area']['max'];

            if ($crop === $plantName) {
                if (($definedMinArea <= $ghArea) && ($ghArea < $definedMaxArea)) {
                    foreach ($deviceDetail['devices'] as $device) {
                        $deviceType = $device['deviceType'];
                        $newArray[$deviceType] = $device['device-count'];

                    }
                    foreach ($deviceDetail['sensors'] as $sensor) {
                        $sensorType = $sensor['sensorType'];
                        $newArray[$sensorType] = $sensor['sensor-count'];
                    }

                }
            }
        }
        return view('devices_sensors', array('newArray' => $newArray));
    }
}
