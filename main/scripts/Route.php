<?php
class Route{
	protected $file;
	public function getRoute($route){
		if($route=="dashboard"){
			$this->file = 'dashboard.php';
		}else if($route=="reports"){
			$this->file = 'reports.php';
		}else if($route=="system"){
			$this->file = 'system.php';
		}
		return $this->file;
	}	
}
?>