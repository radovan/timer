<?php
	/**
	 * Timer
	 * Easy benchmark machine
	 * @author Radovan Paulech
	 */
	class Timer {
		private $startTime;
		private $result;
		private $savedTimes = array();
	
		public function start() {
			$this->startTime = $this->getMicrotime();
		}
		
		public function stop() {
			$this->result = $this->getMicrotime() - $this->startTime;
		}
		
		public function getResult() {
			return $this->result;
		}
		
		public function setStartTime($startTime) {
			$this->startTime = $startTime;
		}
		
		private function getMicrotime(){ 
			list($usec, $sec) = explode(' ', microtime()); 
			return ((float)$usec + (float)$sec); 
		}
		
		public function saveTime($code = null) {
			$this->savedTimes[] = array(
				'title' => $code,
				's' => time(),
				'res' => $this->result
			);
		}

	}
?>