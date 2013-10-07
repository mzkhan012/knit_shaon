<?php
App::uses('AppController', 'Controller');
/**
 * Dyingstatuses Controller
 *
 * @property Dyingstatus $Dyingstatus
 */
class DyingstatusesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dyingstatus->recursive = 0;
		$this->set('dyingstatuses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dyingstatus->exists($id)) {
			throw new NotFoundException(__('Invalid dyingstatus'));
		}
		$options = array('conditions' => array('Dyingstatus.' . $this->Dyingstatus->primaryKey => $id));
		$this->set('dyingstatus', $this->Dyingstatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dyingstatus->create();
			if ($this->Dyingstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The dyingstatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dyingstatus could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dyingstatus->exists($id)) {
			throw new NotFoundException(__('Invalid dyingstatus'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Dyingstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The dyingstatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dyingstatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dyingstatus.' . $this->Dyingstatus->primaryKey => $id));
			$this->request->data = $this->Dyingstatus->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dyingstatus->id = $id;
		if (!$this->Dyingstatus->exists()) {
			throw new NotFoundException(__('Invalid dyingstatus'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dyingstatus->delete()) {
			$this->Session->setFlash(__('Dyingstatus deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dyingstatus was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
