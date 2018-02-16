<?php
class LightsController extends AppController {

	var $name = 'Lights';

	function index() {
		$this->Light->recursive = 0;
		$this->set('lights', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid light', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('light', $this->Light->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Light->create();
			if ($this->Light->save($this->data)) {
				$this->Session->setFlash(__('The light has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The light could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid light', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Light->save($this->data)) {
				$this->Session->setFlash(__('The light has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The light could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Light->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for light', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Light->delete($id)) {
			$this->Session->setFlash(__('Light deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Light was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
