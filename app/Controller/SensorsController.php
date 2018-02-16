<?php
class SensorsController extends AppController {

	var $name = 'Sensors';

	function index() {
		$this->Sensor->recursive = 0;
		$this->set('sensors', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sensor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sensor', $this->Sensor->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Sensor->create();
			if ($this->Sensor->save($this->data)) {
				$this->Session->setFlash(__('The sensor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sensor could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sensor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sensor->save($this->data)) {
				$this->Session->setFlash(__('The sensor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sensor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sensor->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sensor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sensor->delete($id)) {
			$this->Session->setFlash(__('Sensor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sensor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
