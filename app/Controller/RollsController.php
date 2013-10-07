<?php
App::uses('AppController', 'Controller');
/**
 * Rolls Controller
 *
 * @property Roll $Roll
 */
class RollsController extends AppController {
 public $components = array('Paginator','Search.Prg');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Roll->recursive = 0;
		$this->set('rolls', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Roll->exists($id)) {
			throw new NotFoundException(__('Invalid roll'));
		}
		$options = array('conditions' => array('Roll.' . $this->Roll->primaryKey => $id));
		$this->set('roll', $this->Roll->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Roll->create();
			$this->request->data['Roll']['barcode']=$this->generateRollBarcode();
			$this->request->data['Roll']['createdby']=$_SESSION['UserAuth']['User']['email'];
			$this->request->data['Roll']['modifiedby']=$_SESSION['UserAuth']['User']['email'];
			if ($this->Roll->save($this->request->data)) {
				$this->Session->setFlash(__('The roll has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The roll could not be saved. Please, try again.'));
			}
		}
		$greystorestatuses = $this->Roll->Greystorestatus->find('list');
		$dyingstatuses = $this->Roll->Dyingstatus->find('list');
		$finishingstatuses = $this->Roll->Finishingstatus->find('list');
		$greystatuses = $this->Roll->Greystatus->find('list');
		$orderstatuses = $this->Roll->Orderstatus->find('list');
		$mainstorestatuses = $this->Roll->Mainstorestatus->find('list');
		$jobcards = $this->Roll->Jobcard->find('list');
		$this->set(compact('greystorestatuses', 'dyingstatuses', 'finishingstatuses', 'greystatuses', 'orderstatuses', 'mainstorestatuses', 'jobcards'));
	}
	
	private function generateRollBarcode(){
		
		return uniqid();
	}
	public function received($id = null) {
		
		if (!$this->Roll->exists($id)) {
			throw new NotFoundException(__('Invalid roll'));
		}
		
		$this->Roll->id = $id;

		//$this->Roll->saveField('grey_store_status_id', '3');
		
	$user_gorup_id = $_SESSION['UserAuth']['UserGroup']['id'];
		
	if($user_gorup_id == 5) {
		$this->Roll->saveField('grey_store_status_id', $this->_getGreyStoreStatusId('1112'));
		//$this->Roll->saveField('dying_status_id', $this->_getDyingStatusId('1112'));
	} else if($user_gorup_id == 6) {
		$this->Roll->saveField('dying_status_id', $this->_getDyingStatusId('1112'));
		//$this->Roll->saveField('finishing_status_id', $this->_getFinishingStatusId('1220'));
		//echo $this->_getDyingStatusId('1111');die;
	} else if($user_gorup_id == 7) {
		$this->Roll->saveField('finishing_status_id', $this->_getFinishingStatusId('1221'));
		//echo $this->_getFinishingStatusId('1221');die;
	} else if($user_gorup_id == 8) {
		$this->Roll->saveField('main_store_status_id', $this->_getMainStoreStatusId('1112'));
		//echo $this->_getMainStoreStatusId('1114');die;
	}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function released($id = null) {
		
		if (!$this->Roll->exists($id)) {
			throw new NotFoundException(__('Invalid roll'));
		}
		
		$this->Roll->id = $id;

		//$this->Roll->saveField('grey_store_status_id', '3');
		
	$user_gorup_id = $_SESSION['UserAuth']['UserGroup']['id'];
		
	if($user_gorup_id == 5) {
		$this->Roll->saveField('grey_store_status_id', $this->_getGreyStoreStatusId('1113'));
		$this->Roll->saveField('dying_status_id', $this->_getDyingStatusId('1111'));
	} else if($user_gorup_id == 6) {
		$this->Roll->saveField('dying_status_id', $this->_getDyingStatusId('1113'));
		$this->Roll->saveField('finishing_status_id', $this->_getFinishingStatusId('1220'));
		//echo $this->_getDyingStatusId('1111');die;
	} else if($user_gorup_id == 7) {
		$this->Roll->saveField('finishing_status_id', $this->_getFinishingStatusId('1222'));
		//echo $this->_getFinishingStatusId('1222');die;
		$this->Roll->saveField('main_store_status_id', $this->_getMainStoreStatusId('1112'));
	} else if($user_gorup_id == 8) {
		$this->Roll->saveField('main_store_status_id', $this->_getMainStoreStatusId('1114'));
		//echo $this->_getMainStoreStatusId('1114');die;
	}
		return $this->redirect(array('action' => 'index'));
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Roll->exists($id)) {
			throw new NotFoundException(__('Invalid roll'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Roll']['createdby']=$_SESSION['UserAuth']['User']['email'];
			$this->request->data['Roll']['modifiedby']=$_SESSION['UserAuth']['User']['email'];
			if ($this->Roll->save($this->request->data)) {
				$this->Session->setFlash(__('The roll has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The roll could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Roll.' . $this->Roll->primaryKey => $id));
			$this->request->data = $this->Roll->find('first', $options);
		}
		$greystorestatuses = $this->Roll->Greystorestatus->find('list');
		$dyingstatuses = $this->Roll->Dyingstatus->find('list');
		$finishingstatuses = $this->Roll->Finishingstatus->find('list');
		$greystatuses = $this->Roll->Greystatus->find('list');
		$orderstatuses = $this->Roll->Orderstatus->find('list');
		$mainstorestatuses = $this->Roll->Mainstorestatus->find('list');
		$jobcards = $this->Roll->Jobcard->find('list');
		$this->set(compact('greystorestatuses', 'dyingstatuses', 'finishingstatuses', 'greystatuses', 'orderstatuses', 'mainstorestatuses', 'jobcards'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Roll->id = $id;
		if (!$this->Roll->exists()) {
			throw new NotFoundException(__('Invalid roll'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Roll->delete()) {
			$this->Session->setFlash(__('Roll deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Roll was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	//start search plugin code
	public $presetVars = true; // using the model configuration

    public function find() {
        $this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Roll->parseCriteria($this->Prg->parsedParams());
        $this->set('rolls', $this->paginate());
    }
	
	
	//end search plugin code
	
	public function print_barcode($id) {
		$this->layout = 'ajax';
		if (!$this->Roll->exists($id)) {
			throw new NotFoundException(__('Invalid roll'));
		}
		$options = array('conditions' => array('Roll.' . $this->Roll->primaryKey => $id));
		$this->set('roll', $this->Roll->find('first', $options));
	}
	
	private function _getGreyStoreStatusId($statusCode){
		
		$this->loadModel('GreyStoreStatus');
		$this->GreyStoreStatus->recursive = -1;
		$options = array('conditions' => array('GreyStoreStatus.status_code =' => $statusCode));
		$roll = $this->GreyStoreStatus->find('first', $options);
		
		return $roll['GreyStoreStatus']['id'];
		
		}
	private function _getDyingStatusId($statusCode){
		
		$this->loadModel('DyingStatus');
		$this->DyingStatus->recursive = -1;
		$options = array('conditions' => array('DyingStatus.status_code =' => $statusCode));
		$roll = $this->DyingStatus->find('first', $options);
		
		return $roll['DyingStatus']['id'];
		}
	private function _getFinishingStatusId($statusCode){
		
		$this->loadModel('FinishingStatus');
		$this->FinishingStatus->recursive = -1;
		$options = array('conditions' => array('FinishingStatus.status_code =' => $statusCode));
		$roll = $this->FinishingStatus->find('first', $options);
		
		return $roll['FinishingStatus']['id'];
		
		}
		
	
	private function _getMainStoreStatusId($statusCode){
		$this->loadModel('MainStoreStatus');
		$this->MainStoreStatus->recursive = -1;
		$options = array('conditions' => array('MainStoreStatus.status_code =' => $statusCode));
		$roll = $this->MainStoreStatus->find('first', $options);
		
		return $roll['MainStoreStatus']['id'];
		}
}
