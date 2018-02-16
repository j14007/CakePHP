<?php
/* Light Test cases generated on: 2017-07-13 10:42:56 : 1499910176*/
App::import('Model', 'Light');

class LightTestCase extends CakeTestCase {
	var $fixtures = array('app.light');

	function startTest() {
		$this->Light =& ClassRegistry::init('Light');
	}

	function endTest() {
		unset($this->Light);
		ClassRegistry::flush();
	}

}
