<?php
App::uses('AppController', 'Controller');
/**
 * Finishingstatuses Controller
 *
 * @property Finishingstatus $Finishingstatus
 */
class FinishingstatusesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Finishingstatus->recursive = 0;
		$this->set('finishingstatuses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Finishingstatus->exists($id)) {
			throw new NotFoundException(__('Invalid finishingstatus'));
		}
		$options = array('conditions' => array('Finishingstatus.' . $this->Finishingstatus->primaryKey => $id));
		$this->set('finishingstatus', $this->Finishingstatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Finishingstatus->create();
			if ($this->Finishingstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The finishingstatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The finishingstatus could not be saved. Please, try again.'));
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
		if (!$this->Finishingstatus->exists($id)) {
			throw new NotFoundException(__('Invalid finishingstatus'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Finishingstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The finishingstatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The finishingstatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Finishingstatus.' . $this->Finishingstatus->primaryKey => $id));
			$this->request->data = $this->Finishingstatus->find('first', $options);
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
		$this->Finishingstatus->id = $id;
		if (!$this->Finishingstatus->exists()) {
			throw new NotFoundException(__('Invalid finishingstatus'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Finishingstatus->delete()) {
			$this->Session->setFlash(__('Finishingstatus deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Finishingstatus was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
