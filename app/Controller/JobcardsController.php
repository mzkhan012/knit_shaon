<?php
App::uses('AppController', 'Controller');
/**
 * Jobcards Controller
 *
 * @property Jobcard $Jobcard
 */
class JobcardsController extends AppController {

 public $components = array('Paginator','Search.Prg');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Jobcard->recursive = 0;
		$this->set('jobcards', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Jobcard->exists($id)) {
			throw new NotFoundException(__('Invalid jobcard'));
		}
		$options = array('conditions' => array('Jobcard.' . $this->Jobcard->primaryKey => $id));
		$this->set('jobcard', $this->Jobcard->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Jobcard->create();
			$this->request->data['Jobcard']['barcode']=$this->generateJobBarcode();
			$this->request->data['Jobcard']['createdby']=$_SESSION['UserAuth']['User']['email'];
			$this->request->data['Jobcard']['modifiedby']=$_SESSION['UserAuth']['User']['email'];
			if ($this->Jobcard->save($this->request->data)) {
				$this->Session->setFlash(__('The jobcard has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobcard could not be saved. Please, try again.'));
			}
		}
		$knitingplans = $this->Jobcard->Knitingplan->find('list');
		$this->set(compact('knitingplans'));
	}

/**
 * edit method
 
 */
	private function generateJobBarcode(){
		
		return uniqid();
	}
	
	
	
	/*detail method by khan*/
	
	public function detail($id = null){
		
		if (!$this->Jobcard->exists($id)) {
			throw new NotFoundException(__('Invalid jobcard'));
		}
		$this->Jobcard->recursive = 3;
		//debug($jobcard);die();
		$options = array('conditions' => array('jobcard.id ='.$id));
		$_jobcard = $this->Jobcard->find('first', $options);
		//debug($_knitingplan);
		
		
		//passign objects to view
		$this->set('jobcard', $_jobcard);
		
		/*$options = array('conditions' => array('Jobcard.' . $this->Jobcard->primaryKey => $id));
		$this->set('jobcard', $this->Jobcard->find('first', $options));*/
		}
		
		public function totaljobcard() {
  }
	
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Jobcard->exists($id)) {
			throw new NotFoundException(__('Invalid jobcard'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Jobcard->save($this->request->data)) {
				$this->Session->setFlash(__('The jobcard has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobcard could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Jobcard.' . $this->Jobcard->primaryKey => $id));
			$this->request->data = $this->Jobcard->find('first', $options);
		}
		$knitingplans = $this->Jobcard->Knitingplan->find('list');
		$this->set(compact('knitingplans'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Jobcard->id = $id;
		if (!$this->Jobcard->exists()) {
			throw new NotFoundException(__('Invalid jobcard'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Jobcard->delete()) {
			$this->Session->setFlash(__('Jobcard deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Jobcard was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	
	
	//start search plugin code
    public $presetVars = true; // using the model configuration

    public function find() {
        $this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Jobcard->parseCriteria($this->Prg->parsedParams());
        $this->set('jobcards', $this->paginate());
    }
	//end search plugin code
}
