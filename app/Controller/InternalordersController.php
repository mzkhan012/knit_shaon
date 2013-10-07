<?php
App::uses('AppController', 'Controller');
/**
 * Internalorders Controller
 *
 * @property Internalorder $Internalorder
 */
class InternalordersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Internalorder->recursive = 0;
		$this->set('internalorders', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Internalorder->exists($id)) {
			throw new NotFoundException(__('Invalid internalorder'));
		}
		$options = array('conditions' => array('Internalorder.' . $this->Internalorder->primaryKey => $id));
		$this->set('internalorder', $this->Internalorder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Internalorder->create();
			if ($this->Internalorder->save($this->request->data)) {
				$this->Session->setFlash(__('The internalorder has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The internalorder could not be saved. Please, try again.'));
			}
		}
	}

/**


/**
 * place method
 *
 * @return void
 */
	public function place() {
		if ($this->request->is('post')) {
			$this->Internalorder->create();
			
			$InternalSave= array('Internalorder'=>$this->request->data['Internalorder']);
			
			
			/*debug($InternalSave);
			die();*/
			if ($this->Internalorder->save($InternalSave)) {
				 $this->loadModel('Orderitem');
				 
				 $itemSave=array('Orderitem'=>$this->request->data['Orderitem']);
				 
				 foreach($itemSave['Orderitem'] as $order){
					 
					 $this->Orderitem->create();
					 $orders =array('Orderitem'=>$order);
					
					 $orders['Orderitem']['internalorder_id']=$this->Internalorder->getLastInsertID();
					 $orders['Orderitem']['created_by']=$_SESSION['UserAuth']['User']['id'];
					 $orders['Orderitem']['modified_by']=$_SESSION['UserAuth']['User']['id'];
					 //debug($orders);
					 //die();
				 if($this->Orderitem->save($orders)){
					
				 $this->Session->setFlash(__('The internalorder has been saved'));
				 }
				 }
				$this->redirect(array('action' => 'index'));
 			} 
 			else {
				$this->Session->setFlash(__('The internalorder could not be saved. Please, try again.'));
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
		if (!$this->Internalorder->exists($id)) {
			throw new NotFoundException(__('Invalid internalorder'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Internalorder->save($this->request->data)) {
				$this->Session->setFlash(__('The internalorder has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The internalorder could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Internalorder.' . $this->Internalorder->primaryKey => $id));
			$this->request->data = $this->Internalorder->find('first', $options);
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
		$this->Internalorder->id = $id;
		if (!$this->Internalorder->exists()) {
			throw new NotFoundException(__('Invalid internalorder'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Internalorder->delete()) {
			$this->Session->setFlash(__('Internalorder deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Internalorder was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
