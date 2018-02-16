<?php
/* Lights Test cases generated on: 2017-07-13 10:46:24 : 1499910384*/
App::import('Controller', 'Lights');

class TestLightsController extends LightsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LightsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.light');

	function startTest() {
		$this->Lights =& new TestLightsController();
		$this->Lights->constructClasses();
	}

	function endTest() {
		unset($this->Lights);
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
