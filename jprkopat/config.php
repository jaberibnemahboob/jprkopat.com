<?php
class config{
    /*
     * BASIC CONFIGURATION
    */
    const DEBUG = false;

    /*
     * DB CONFIGURATION
    */
    const HOSTNAME = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DATABASE = "personal";

    /*
     * LIBRARY PATH CONFIGURATION
    */
    const LIBRARY = ROOT.DS."library";
    const CONTROLLER = ROOT.DS."library".DS."controller";
    const OBJECT = ROOT.DS."library".DS."object";
    const MODULE = ROOT.DS."library".DS."module";
    const VIEW = ROOT.DS."view";

    /*
     * LIBRARY INDEX RECORD
    */
    const LIBRARY_INDEX = "lindex.php";
    const OBJECT_INDEX = "oindex.php";

    /*
     * SITE RELATED INFORMATION STORAGE
    */
    protected static $domain;
	protected static $siteurl;

    /*
     * DB RELATED INFORMATION STORAGE
    */
	protected static $dbhelper;
	protected static $sqlhelper;

    /*
     * STORAGE ASSIGNMENT
    */
	public function __construct(){
		self::$domain = domain(true);
		self::$siteurl = httptype().self::$domain;
		self::$dbhelper = new dbhelper();
		self::$sqlhelper = new sqlhelper();
	}

	/*
	 * STORAGE DATA GETTER METHOD
	*/
	public static function __callStatic($name,$arg){
		if(isset(self::$$name)) return self::$$name;
	}
}
?>
