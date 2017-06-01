<?php
if(!function_exists("httptype")){
    function httptype(){
        $isHTTPS = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on");
        return ($isHTTPS) ? 'https://' : 'http://';
    }
}
?>
