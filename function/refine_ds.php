<?php
if(!function_exists("refine_ds")){
    function refine_ds($path){ return str_replace(array("/","\\"),DS,$path); }
}
?>
