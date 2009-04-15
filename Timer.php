<?php
	/**
	 * Timer
	 * Easy benchmark machine
	 * @author Radovan Paulech
	 */
	class Timer {
		private $startTime;
		private $result;
	
		public function start() {
			$this->startTime = $this->getMicrotime();
		}
		
		public function stop() {
			$this->result = $this->getMicrotime() - $this->startTime;
		}
		
		public function getResult() {
			return $this->result;
		}
		
		private function getMicrotime(){ 
			list($usec, $sec) = explode(' ', microtime()); 
			return ((float)$usec + (float)$sec); 
		}
function save($code = null) {}

	}
?>