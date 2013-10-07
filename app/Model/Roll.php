<?php
App::uses('AppModel', 'Model');
/**
 * Roll Model
 *
 * @property Greystorestatus $Greystorestatus
 * @property Dyingstatus $Dyingstatus
 * @property Finishingstatus $Finishingstatus
 * @property Greystatus $Greystatus
 * @property Orderstatus $Orderstatus
 * @property Mainstorestatus $Mainstorestatus
 * @property Jobcard $Jobcard
 */
class Roll extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Greystorestatus' => array(
			'className' => 'Greystorestatus',
			'foreignKey' => 'greystorestatus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Dyingstatus' => array(
			'className' => 'Dyingstatus',
			'foreignKey' => 'dyingstatus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Finishingstatus' => array(
			'className' => 'Finishingstatus',
			'foreignKey' => 'finishingstatus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Greystatus' => array(
			'className' => 'Greystatus',
			'foreignKey' => 'greystatus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Orderstatus' => array(
			'className' => 'Orderstatus',
			'foreignKey' => 'orderstatus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Mainstorestatus' => array(
			'className' => 'Mainstorestatus',
			'foreignKey' => 'mainstorestatus_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Jobcard' => array(
			'className' => 'Jobcard',
			'foreignKey' => 'jobcard_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	/* search plug in code*/
  public $actsAs = array('Search.Searchable');

    public $filterArgs = array(
        'title' => array('type' => 'like'),
        'barcode' => array('type' => 'value'),
        'search' => array('type' => 'like', 'field' => 'Roll.description'),
        'range' => array('type' => 'expression', 'method' => 'makeRangeCondition', 'field' => 'Roll.views BETWEEN ? AND ?'),
        'username' => array('type' => 'like', 'field' => array('User.username', 'UserInfo.first_name')),
        'tags' => array('type' => 'subquery', 'method' => 'findByTags', 'field' => 'Jobcard.id'),
        'filter' => array('type' => 'query', 'method' => 'orConditions'),
        'enhanced_search' => array('type' => 'like', 'encode' => true, 'before' => false, 'after' => false, 'field' => array('Roll.name', 'OtherModel.name')),
    );

    public function findByTags($data = array()) {
        $this->Tagged->Behaviors->attach('Containable', array('autoFields' => false));
        $this->Tagged->Behaviors->attach('Search.Searchable');
        $query = $this->Tagged->getQuery('all', array(
            'conditions' => array('Tag.name'  => $data['tags']),
            'fields' => array('foreign_key'),
            'contain' => array('Tag')
        ));
        return $query;
    }

    public function orConditions($data = array()) {
        $filter = $data['filter'];
        $cond = array(
            'OR' => array(
                $this->alias . '.title LIKE' => '%' . $filter . '%',
                $this->alias . '.body LIKE' => '%' . $filter . '%',
            ));
        return $cond;
    }
}
