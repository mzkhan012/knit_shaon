<?php
App::uses('AppController', 'Controller');
/**
 * Greystatuses Controller
 *
 * @property Greystatus $Greystatus
 */
class GreystatusesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Greystatus->recursive = 0;
		$this->set('greystatuses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Greystatus->exists($id)) {
			throw new NotFoundException(__('Invalid greystatus'));
		}
		$options = array('conditions' => array('Greystatus.' . $this->Greystatus->primaryKey => $id));
		$this->set('greystatus', $this->Greystatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Greystatus->create();
			if ($this->Greystatus->save($this->request->data)) {
				$this->Session->setFlash(__('The greystatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The greystatus could not be saved. Please, try again.'));
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
		if (!$this->Greystatus->exists($id)) {
			throw new NotFoundException(__('Invalid greystatus'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Greystatus->save($this->request->data)) {
				$this->Session->setFlash(__('The greystatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The greystatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Greystatus.' . $this->Greystatus->primaryKey => $id));
			$this->request->data = $this->Greystatus->find('first', $options);
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
		$this->Greystatus->id = $id;
		if (!$this->Greystatus->exists()) {
			throw new NotFoundException(__('Invalid greystatus'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Greystatus->delete()) {
			$this->Session->setFlash(__('Greystatus deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Greystatus was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
