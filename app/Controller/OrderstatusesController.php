<?php
App::uses('AppController', 'Controller');
/**
 * Orderstatuses Controller
 *
 * @property Orderstatus $Orderstatus
 */
class OrderstatusesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Orderstatus->recursive = 0;
		$this->set('orderstatuses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Orderstatus->exists($id)) {
			throw new NotFoundException(__('Invalid orderstatus'));
		}
		$options = array('conditions' => array('Orderstatus.' . $this->Orderstatus->primaryKey => $id));
		$this->set('orderstatus', $this->Orderstatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Orderstatus->create();
			if ($this->Orderstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The orderstatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderstatus could not be saved. Please, try again.'));
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
		if (!$this->Orderstatus->exists($id)) {
			throw new NotFoundException(__('Invalid orderstatus'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Orderstatus->save($this->request->data)) {
				$this->Session->setFlash(__('The orderstatus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderstatus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Orderstatus.' . $this->Orderstatus->primaryKey => $id));
			$this->request->data = $this->Orderstatus->find('first', $options);
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
		$this->Orderstatus->id = $id;
		if (!$this->Orderstatus->exists()) {
			throw new NotFoundException(__('Invalid orderstatus'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Orderstatus->delete()) {
			$this->Session->setFlash(__('Orderstatus deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Orderstatus was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
