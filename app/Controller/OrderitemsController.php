<?php
App::uses('AppController', 'Controller');
/**
 * Orderitems Controller
 *
 * @property Orderitem $Orderitem
 */
class OrderitemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Orderitem->recursive = 0;
		$this->set('orderitems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Orderitem->exists($id)) {
			throw new NotFoundException(__('Invalid orderitem'));
		}
		$options = array('conditions' => array('Orderitem.' . $this->Orderitem->primaryKey => $id));
		$this->set('orderitem', $this->Orderitem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Orderitem->create();
			if ($this->Orderitem->save($this->request->data)) {
				$this->Session->setFlash(__('The orderitem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderitem could not be saved. Please, try again.'));
			}
		}
		$internalorders = $this->Orderitem->Internalorder->find('list');
		$this->set(compact('internalorders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Orderitem->exists($id)) {
			throw new NotFoundException(__('Invalid orderitem'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Orderitem->save($this->request->data)) {
				$this->Session->setFlash(__('The orderitem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderitem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Orderitem.' . $this->Orderitem->primaryKey => $id));
			$this->request->data = $this->Orderitem->find('first', $options);
		}
		$internalorders = $this->Orderitem->Internalorder->find('list');
		$this->set(compact('internalorders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Orderitem->id = $id;
		if (!$this->Orderitem->exists()) {
			throw new NotFoundException(__('Invalid orderitem'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Orderitem->delete()) {
			$this->Session->setFlash(__('Orderitem deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Orderitem was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
