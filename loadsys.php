<?php
class loadsys{
	private $root = __DIR__;
	private $syspath;
	public function __construct($syspath,$root=null){
		if(!empty($root)) $this->root = $root;
		$this->syspath = $this->root.DS.$syspath;
		$this->load(array($this->syspath));
	}
	private function load($patharr){
		while($path=array_shift($patharr)){
			foreach(scandir($path) as $file){
				if($file!="." &&
				$file!=".." &&
				is_dir($path.DS.$file)) array_push($patharr,$path.DS.$file);

				elseif($file!="." &&
				$file!=".." &&
				!is_dir($path.DS.$file) &&
				((strlen($file)-4)===strpos($file,".php")))
					require_once($path.DS.$file);
			}
		}
	}
}
?>
