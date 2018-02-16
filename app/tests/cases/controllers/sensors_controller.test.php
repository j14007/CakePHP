<?php
/* Sensors Test cases generated on: 2017-07-14 14:03:34 : 1500008614*/
App::import('Controller', 'Sensors');

class TestSensorsController extends SensorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SensorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sensor');

	function startTest() {
		$this->Sensors =& new TestSensorsController();
		$this->Sensors->constructClasses();
	}

	function endTest() {
		unset($this->Sensors);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
