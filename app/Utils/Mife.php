<?php
/**
 * Created by PhpStorm.
 * User: Aravinda_inova
 * Date: 6/29/2017
 * Time: 1:14 PM
 */
namespace App\Utils;
use Illuminate\Support\Facades\Auth;

class Mife {

    var $mife_profile = array('IOTM2M' => 'GITCC');
    var $mife_password = array('IOTM2M' => 'gitcc@12345');
    var $mife_scope = array('IOTM2M' => 'PRODUCTION');

    //var $mife_users = array('IOTM2M' => '8DKJygYy9bxY7op606PUtWQSLhAa:Z9So2L1JmxIOzKDjTMnBK6sK8Woa');//Staging
    //var $mife_api_call = 'https://mife-stg.dialog.lk/apicall';//Staging

    var $mife_users = array('IOTM2M' => 'XV23fdnOmBC0DtSwpXQO30JPAOYa:fMyPdGmvVcYvBV7uwsIYFGfPGA0a');//Production
    var $mife_api_call = 'https://mife.dialog.lk/apicall';//Production

    var $mife_token_dir = 'mife_tokens/';

    function __construct(){
        $this->mife_token_dir = base_path().DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'Utils'.DIRECTORY_SEPARATOR.'mife_tokens'.DIRECTORY_SEPARATOR;
    }

    function curlCall($url, $type, $data, $headder = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        if (count($headder) > 0) curl_setopt($ch, CURLOPT_HTTPHEADER, $headder);

        if ($type == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1); //If not set it will be GET by default
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
        if ($type == 'PUT') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } elseif ($type == 'DELETE') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } elseif ($type == 'PATCH') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }


        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //added by rangana for special testing
        $output = curl_exec($ch);
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $return_array = array($http_status, $output);
        return $return_array;
    }


    function get_via_mife($url, $type, $data, $mife_user='IOTM2M', $islive=true, $bContentType = true)
    {
        $existing_acc_token = $this->token_curlCall("access_token", $mife_user, $islive);

        if ($existing_acc_token != null)
        {
            if ($bContentType) {
                $header = array(
                    "Authorization: Bearer " . $existing_acc_token,
                    "Content-Type:application/json",
                    "Accept: application/json");
            } else {
                $header = array(
                    "Authorization: Bearer " . $existing_acc_token,
                    "Accept: application/json");
            }

            $result = $this->curlCall($url, $type, $data, $header );

            if ($result[0] == 401)
            {
                $acc_token = $this->token_curlCall("new_access_token", $mife_user, $islive);

                $header = array(
                    "Authorization: Bearer " . $acc_token,
                    "Content-Type:application/json",
                    "Accept: application/json");
                $result = $this->curlCall($url, $type, $data, $header);

                if ($result[0] == 401)
                {
                    $acc_token = $this->token_curlCall("new_refresh_token", $mife_user, $islive);
                    $header = array(
                        "Authorization: Bearer " . $acc_token,
                        "Content-Type:application/json",
                        "Accept: application/json");
                    $result = $this->curlCall($url, $type, $data, $header);
                }
            }
        }
        else
        {
            $refresh_token = $this->token_curlCall("new_refresh_token", $mife_user, $islive);
            $header = array(
                "Authorization: Bearer " . $refresh_token,
                "Content-Type:application/json",
                "Accept: application/json");
            $result = $this->curlCall($url, $type, $data, $header);
        }

        error_log(date('Y-m-d H:i:s') . ',' . $url . ',' . $type . ',' . json_encode($data) . PHP_EOL, 3, base_path().DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR . date('Ymd') . '.log');

        error_log(date('Y-m-d H:i:s') . ',' . $url . ',' . $type . ',' . json_encode($result) . PHP_EOL, 3, base_path().DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR . date('Ymd') . '.log');
        return $result;
    }

    function token_curlCall($token_type, $mife_user, $islive = true)
    {
        if ($islive)
        {
            $auth_code = isset($this->mife_users[$mife_user]) ? $this->mife_users[$mife_user] : response(null, 401);
        }
        else
        {
            $auth_code = isset($this->mife_users[$mife_user]) ? $this->mife_users[$mife_user] : response(null, 402);
        }
        $auth_profile = isset($this->mife_profile[$mife_user]) ? $this->mife_profile[$mife_user] : response(null, 401);
        $auth_scope = isset($this->mife_scope[$mife_user]) ? $this->mife_scope[$mife_user] : response(null, 401);
        $auth_passwd = isset($this->mife_password[$mife_user]) ? $this->mife_password[$mife_user] : response(null, 401);

        $MIFE_REFRESH_TOKEN_FILE = $this->mife_token_dir . $mife_user . '_mife_refresh_token.php';
        $MIFE_ACCESS_TOKEN_FILE = $this->mife_token_dir . $mife_user . '_mife_access_token.php';

        if ($token_type == "new_refresh_token")
        {
            $auth_code = base64_encode($auth_code);
            $url = $this->mife_api_call . "/token?grant_type=password&username=$auth_profile&password=$auth_passwd&scope=$auth_scope";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/x-www-form-urlencoded",
                "Authorization: Basic " . $auth_code
            ));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $output = curl_exec($ch);
            $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($http_status == 200 || $http_status == 201)
            {
                $doutput = json_decode($output, true);
                $refresh_token = $doutput["refresh_token"];
                $access_token = $doutput["access_token"];

                $myfile1 = fopen($MIFE_REFRESH_TOKEN_FILE, "w") or die("Unable to open file!");
                fwrite($myfile1, '<?php $refresh_token = "' . $refresh_token . '"; ?>');
                fclose($myfile1);
                if (function_exists('opcache_invalidate'))
                {
                    opcache_invalidate($MIFE_REFRESH_TOKEN_FILE, true);
                }
                $myfile2 = fopen($MIFE_ACCESS_TOKEN_FILE, "w") or die("Unable to open file!");
                fwrite($myfile2, '<?php $access_token = "' . $access_token . '"; ?>');
                fclose($myfile2);
                if (function_exists('opcache_invalidate'))
                {
                    opcache_invalidate($MIFE_ACCESS_TOKEN_FILE, true);
                }
                return $access_token;
            }
        }
        else if ($token_type == "new_access_token")
        {
            $auth_code = base64_encode("dDKsiVzwAH78vsKxfs6mVtJ9Cn8a" . ":" . "NIsK5varQPldcxykrC1hObOEB_0a");
            if (!file_exists($MIFE_REFRESH_TOKEN_FILE))
            {
                return null;
            }
            include($MIFE_REFRESH_TOKEN_FILE);

            $url = $this->mife_api_call . '/token?grant_type=refresh_token&refresh_token=' . $refresh_token . '&scope=' . $auth_scope;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/x-www-form-urlencoded",
                "Authorization: " . $auth_code
            ));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $output = curl_exec($ch);
            $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($http_status == 200 || $http_status == 201)
            {
                $doutput = json_decode($output, true);
                $refresh_token = $doutput["refresh_token"];
                $access_token = $doutput["access_token"];
                $myfile1 = fopen($MIFE_REFRESH_TOKEN_FILE, "w") or die("Unable to open file!");
                fwrite($myfile1, '<?php $refresh_token = "' . $refresh_token . '"; ?>');
                fclose($myfile1);
                if (function_exists('opcache_invalidate'))
                {
                    opcache_invalidate($MIFE_REFRESH_TOKEN_FILE, true);
                }
                $myfile2 = fopen($MIFE_ACCESS_TOKEN_FILE, "w") or die("Unable to open file!");
                fwrite($myfile2, '<?php $access_token = "' . $access_token . '"; ?>');
                fclose($myfile2);
                if (function_exists('opcache_invalidate'))
                {
                    opcache_invalidate($MIFE_ACCESS_TOKEN_FILE, true);
                }
                return $access_token;
            }
        }
        elseif ($token_type == "access_token")
        {
            $path = $MIFE_ACCESS_TOKEN_FILE;
            if (!file_exists($path))
            {
                return null;
            }
            include($path);
            return $access_token;
        }
        else
        {
            return null;
        }
    }

    public static function CreateApp($appName){
        Lib::curlCallWithCookies(env('MIFE_ADMIN_URL') . '/store/site/blocks/application/application-add/ajax/application-add.jag?action=addApplication&application=' . $appName . '&tier=Unlimited&description=&callbackUrl=', 'POST', array(), array(), 'Store');
        $response = Lib::curlCallWithCookies(env('MIFE_ADMIN_URL') . '/store/site/blocks/subscription/subscription-add/ajax/subscription-add.jag?action=generateApplicationKey&application=' . $appName . '&keytype=PRODUCTION&callbackUrl=&authorizedDomains=ALL&validityTime=360000', 'POST', array(), array(), 'Store');

        return isset($response[0]) ? json_decode($response[1], true) : [];
    }

    public static function GetAppByName($strAppName){
        $response = Lib::curlCallWithCookies(env('MIFE_ADMIN_URL') . '/store/site/blocks/application/application-list/ajax/application-list.jag?action=getApplicationByName&applicationName='.$strAppName, 'GET', array(), array(), 'Store');
        return isset($response[0]) ? json_decode($response[1], true) : [];
    }

    public static function subscribeToAPIMifeStore($apiName, $provider, $version, $tier, $applicationName)
    {
        $response = Lib::curlCallWithCookies(env('MIFE_ADMIN_URL') . '/store/site/blocks/subscription/subscription-add/ajax/subscription-add.jag?action=addAPISubscription&name=' . $apiName . '&version=' . $version . '&provider=' . $provider . '&tier=' . $tier . '&applicationName=' . $applicationName, 'POST', array(), array(), 'Store');
        $strOutPutCode = isset($response[0]) ? $response[0] : 400;
        $arrOutPut = isset($response[1]) ? json_decode($response[1], true) : array();
        if ($strOutPutCode == 200) {
            return $arrOutPut;
        }
    }

    public function getMifeByApp($url, $type, $data, $app = null, $arrHeaders = [])
    {
        if (!$app)
            $app = Auth::user()->tenantCompany->app;

        //dd($app);
        $existing_acc_token = $this->tokenByApp("access_token", $app);
        if ($existing_acc_token != null)
        {
            $header = array(
                "Authorization: Bearer " . $existing_acc_token,
                "Content-Type:application/json",
                "Accept: application/json");

            if (count($arrHeaders)) {
                foreach ($arrHeaders as $arrHeader)
                    $header[] = $arrHeader;
            }
            $result = $this->curlCall($url, $type, $data, $header );
            if (in_array($result[0], [401, 403]))
            {
                $acc_token = $this->tokenByApp("new_access_token", $app);

                $header = array(
                    "Authorization: Bearer " . $acc_token,
                    "Content-Type:application/json",
                    "Accept: application/json");
                $result = $this->curlCall($url, $type, $data, $header);

            if (in_array($result[0], [ 401, 403]))
                {
                    $acc_token = $this->tokenByApp("new_refresh_token", $app);
                    $header = array(
                        "Authorization: Bearer " . $acc_token,
                        "Content-Type:application/json",
                        "Accept: application/json");
                    $result = $this->curlCall($url, $type, $data, $header);
                    //dd($result);
                }
            }
        }
        else
        {
            $refresh_token = $this->tokenByApp("new_refresh_token", $app);

            $header = array(
                "Authorization: Bearer " . $refresh_token,
                "Content-Type:application/json",
                "Accept: application/json");
            $result = $this->curlCall($url, $type, $data, $header);
        }

        error_log(date('Y-m-d H:i:s') . ',' . $url . ',' . $type . ',' . json_encode($data) . PHP_EOL, 3, base_path().DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR . date('Ymd') . '.log');

        error_log(date('Y-m-d H:i:s') . ',' . $url . ',' . $type . ',' . json_encode($result) . PHP_EOL, 3, base_path().DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR . date('Ymd') . '.log');
        return $result;
    }

    function tokenByApp($token_type, $app)
    {

        $auth_code = "{$app->consumer_name}:{$app->consumer_secret}";
        $auth_code = base64_encode($auth_code);
        $auth_profile = env('MIFE_USER');
        $auth_scope = 'PRODUCTION';
        $auth_passwd = env('MIFE_PASSWORD');

        $MIFE_REFRESH_TOKEN_FILE = $this->mife_token_dir . $app->id . '_mife_refresh_token.php';
        $MIFE_ACCESS_TOKEN_FILE = $this->mife_token_dir . $app->id . '_mife_access_token.php';
        if ($token_type == "new_refresh_token")
        {

            $url = env('MIFE_URL') . "/token?grant_type=password&username=$auth_profile&password=$auth_passwd&scope=$auth_scope";
//dd($url);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/x-www-form-urlencoded",
                "Authorization: Basic " . $auth_code
            ));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $output = curl_exec($ch);
            $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            //dd($http_status);
            if ($http_status == 200 || $http_status == 201)
            {
                $doutput = json_decode($output, true);
                $refresh_token = $doutput["refresh_token"];
                $access_token = $doutput["access_token"];
                $myfile1 = fopen($MIFE_REFRESH_TOKEN_FILE, "w") or die("Unable to open file!");
                fwrite($myfile1, '<?php $refresh_token = "' . $refresh_token . '"; ?>');
                fclose($myfile1);
                if (function_exists('opcache_invalidate'))
                {
                    opcache_invalidate($MIFE_REFRESH_TOKEN_FILE, true);
                }
                $myfile2 = fopen($MIFE_ACCESS_TOKEN_FILE, "w") or die("Unable to open file!");
                fwrite($myfile2, '<?php $access_token = "' . $access_token . '"; ?>');
                fclose($myfile2);
                if (function_exists('opcache_invalidate'))
                {
                    opcache_invalidate($MIFE_ACCESS_TOKEN_FILE, true);
                }
                return $access_token;
            }
        }
        else if ($token_type == "new_access_token")
        {
            if (!file_exists($MIFE_REFRESH_TOKEN_FILE))
            {
                return null;
            }
            include($MIFE_REFRESH_TOKEN_FILE);
            $url = env('MIFE_URL') . '/token?grant_type=refresh_token&refresh_token=' . $refresh_token . '&scope=' . $auth_scope;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/x-www-form-urlencoded",
                "Authorization: " . $auth_code
            ));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $output = curl_exec($ch);
            $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            if ($http_status == 200 || $http_status == 201)
            {
                $doutput = json_decode($output, true);
                $refresh_token = $doutput["refresh_token"];
                $access_token = $doutput["access_token"];
                $myfile1 = fopen($MIFE_REFRESH_TOKEN_FILE, "w") or die("Unable to open file!");
                fwrite($myfile1, '<?php $refresh_token = "' . $refresh_token . '"; ?>');
                fclose($myfile1);
                if (function_exists('opcache_invalidate'))
                {
                    opcache_invalidate($MIFE_REFRESH_TOKEN_FILE, true);
                }
                $myfile2 = fopen($MIFE_ACCESS_TOKEN_FILE, "w") or die("Unable to open file!");
                fwrite($myfile2, '<?php $access_token = "' . $access_token . '"; ?>');
                fclose($myfile2);
                if (function_exists('opcache_invalidate'))
                {
                    opcache_invalidate($MIFE_ACCESS_TOKEN_FILE, true);
                }
                return $access_token;
            }
        }
        elseif ($token_type == "access_token")
        {
            $path = $MIFE_ACCESS_TOKEN_FILE;
            if (!file_exists($path))
            {
                return null;
            }
            include($path);
            return $access_token;
        }
        else
        {
            return null;
        }
    }
}