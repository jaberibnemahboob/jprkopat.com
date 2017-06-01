<?php
/*
 * DEFINE DIRECTORY SEPARATOR
*/
define("DS","/");

/*
 * GET HOSTING ROOT
*/
$cROOT = refine_ds(__DIR__);

/*
 * LOAD HOSTING ROOT FILES
*/
require_once($cROOT.DS."base.php");
require_once($cROOT.DS."loadsys.php");

/*
 * LOAD FUNCTIONS
*/
new loadsys("function");

/*
 * LOAD SYSTEM CLASSES
*/
new loadsys("system");

/*
 * DEFINE ROOT
*/
define("ROOT",$cROOT.DS.domain());

/*
 * LOAD ROOT FILES
*/
require_once(ROOT.DS."config.php");
require_once(ROOT.DS."index.php");
?>
