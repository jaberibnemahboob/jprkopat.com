<?php
if(!function_exists("domain")){
    function domain($iphost=false){

        $isHTTPS = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on");
        $port = (isset($_SERVER["SERVER_PORT"]) && ((!$isHTTPS && $_SERVER["SERVER_PORT"] != "80") || ($isHTTPS && $_SERVER["SERVER_PORT"] != "443")));
        $port = ($port) ? ':'.$_SERVER["SERVER_PORT"] : '';
        $url = ($isHTTPS ? 'https://' : 'http://').$_SERVER["SERVER_NAME"].$port.$_SERVER["REQUEST_URI"];

        $parse_url = parse_url($url);
        if($parse_url['host']=='localhost' || $parse_url['host']=='10.0.2.2'){
            $p = explode("/",$parse_url['path']);
            $p0 = array_shift($p);
            $p1 = array_shift($p);
            if($iphost==true) $parse_url['host'] = $parse_url['host'].DS.$p1;
            else $parse_url['host'] = $p1;
            $parse_url['path'] = "/".implode("/",$p);
        }
        return str_replace("www.","",$parse_url['host']);
    }
}
?>
