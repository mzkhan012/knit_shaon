<?php
App::uses('AppController', 'Controller');
/**
 * Greystorestatuses Controller
 *
 * @property Greystorestatus $Greystorestatus
 */
class GreystorestatusesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Greystorestatus->recursive = 0;
		$this->set('greystorestatuses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Greystorestatus->exists($id)) {
			throw new NotFoundException(__('Invalid greystorestatus'));
		}
		$options = array('conditions' => array('Greystorestatus.' . $this->Greystorestatus->primaryKey => $id));
		$this->set('greystorestatus', $this->Greystorestatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Greystorestatus->create();
			if ($this->Greystorestatus->save($this->request->data)) {
				$this->Session->setFlash(__('The greystorestatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The greystorestatus could not be saved. Please, try again.'));
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
		if (!$this->Greystorestatus->exists($id)) {
			throw new NotFoundException(__('Invalid greystorestatus'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Greystorestatus->save($this->request->data)) {
				$this->Session->setFlash(__('The greystorestatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The greystorestatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Greystorestatus.' . $this->Greystorestatus->primaryKey => $id));
			$this->request->data = $this->Greystorestatus->find('first', $options);
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
		$this->Greystorestatus->id = $id;
		if (!$this->Greystorestatus->exists()) {
			throw new NotFoundException(__('Invalid greystorestatus'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Greystorestatus->delete()) {
			$this->Session->setFlash(__('Greystorestatus deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Greystorestatus was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
