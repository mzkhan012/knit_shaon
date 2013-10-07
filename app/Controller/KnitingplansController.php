<?php
App::uses('AppController', 'Controller');
/**
 * Knitingplans Controller
 *
 * @property Knitingplan $Knitingplan
 */
class KnitingplansController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Knitingplan->recursive = 0;
		$this->set('knitingplans', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Knitingplan->exists($id)) {
			throw new NotFoundException(__('Invalid knitingplan'));
		}
		$options = array('conditions' => array('Knitingplan.' . $this->Knitingplan->primaryKey => $id));
		$this->set('knitingplan', $this->Knitingplan->find('first', $options));
	}




public function detail($id = null) {
		if (!$this->Knitingplan->exists($id)) {
			throw new NotFoundException(__('Invalid knitingplan'));
		}
		$this->Knitingplan->recursive = 2;
		$options = array('conditions' => array('knitingplan.id ='.$id));
		$_knitingplan = $this->Knitingplan->find('first', $options);
		//debug($_knitingplan);die();
		
		//passign objects to view
		$this->set('knitingplan', $_knitingplan);
		//$options = array('conditions' => array('Knitingplan.' . $this->Knitingplan->primaryKey => $id));
		//$this->set('knitingplan', $this->Knitingplan->find('first', $options));
	}
	
	public function place($id) {
    
  if ($this->request->is('post')&& !isset($this->request->data['Jobcard']['totalJobCard'])) {  
    $this->loadModel('Jobcard');
    
    //debug($this->request->data);die();
    $jobcards=$this->request->data['Jobcard'];
    $knitid = $this->request->data['Knitingplan'];
    
    //debug($knitid);die();
    foreach( $jobcards as $jobcard){
     $this->Jobcard->create();
     $jobcard=array('Jobcard'=> $jobcard);
     $jobcard['Jobcard']['barcode'] = $this->generateJobBarcode();
     $jobcard['Jobcard']['createdby']=$_SESSION['UserAuth']['User']['username'];
     $jobcard['Jobcard']['modifiedby']=$_SESSION['UserAuth']['User']['username'];
     $jobcard['Jobcard']['knitingplan_id']= $id;//$this->Knitingplan->getID();
     //debug($this->Knitingplan->getID());die();
     //$card['modifiedby']=;
     //debug($jobcard);
     //debug($jobcard);die();
    /**/if ($this->Jobcard->save($jobcard)) {
       continue;
    } else {
     $this->Session->setFlash(__('The jobcard could not be saved. Please, try again.'));
    }
   }
   
     /*$knitingplans = $this->Jobcard->Knitingplan->find('list');
  $this->set(compact('knitingplans'));*/
  //$this->Session->setFlash(__('The jobcard has been saved.'));
  return $this->redirect(array('action' => 'index'));

  }
  else{
   $this->set('number_of_row',$this->request->data['Jobcard']['totalJobCard']);
  }
 
    
}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Knitingplan->create();
			if ($this->Knitingplan->save($this->request->data)) {
				$this->Session->setFlash(__('The knitingplan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The knitingplan could not be saved. Please, try again.'));
			}
		}
		$orderitems = $this->Knitingplan->Orderitem->find('list');
		$this->set(compact('orderitems'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Knitingplan->exists($id)) {
			throw new NotFoundException(__('Invalid knitingplan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Knitingplan->save($this->request->data)) {
				$this->Session->setFlash(__('The knitingplan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The knitingplan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Knitingplan.' . $this->Knitingplan->primaryKey => $id));
			$this->request->data = $this->Knitingplan->find('first', $options);
		}
		$orderitems = $this->Knitingplan->Orderitem->find('list');
		$this->set(compact('orderitems'));
	}
public function generateJobBarcode(){
				return uniqid();
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Knitingplan->id = $id;
		if (!$this->Knitingplan->exists()) {
			throw new NotFoundException(__('Invalid knitingplan'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Knitingplan->delete()) {
			$this->Session->setFlash(__('Knitingplan deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Knitingplan was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
