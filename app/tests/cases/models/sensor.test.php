<?php
/* Sensor Test cases generated on: 2017-07-14 13:15:05 : 1500005705*/
App::import('Model', 'Sensor');

class SensorTestCase extends CakeTestCase {
	var $fixtures = array('app.sensor');

	function startTest() {
		$this->Sensor =& ClassRegistry::init('Sensor');
	}

	function endTest() {
		unset($this->Sensor);
		ClassRegistry::flush();
	}

}
