<?php
App::uses('AppModel', 'Model');
/**
 * Jobcard Model
 *
 * @property Knitingplan $Knitingplan
 * @property Roll $Roll
 */
class Jobcard extends AppModel {
	
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Knitingplan' => array(
			'className' => 'Knitingplan',
			'foreignKey' => 'knitingplan_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Roll' => array(
			'className' => 'Roll',
			'foreignKey' => 'jobcard_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
/* search plug in code*/
  public $actsAs = array('Search.Searchable');

    public $filterArgs = array(
        'title' => array('type' => 'like'),
        'barcode' => array('type' => 'value'),
        'search' => array('type' => 'like', 'field' => 'Jobcard.description'),
        'range' => array('type' => 'expression', 'method' => 'makeRangeCondition', 'field' => 'Jobcard.views BETWEEN ? AND ?'),
        'username' => array('type' => 'like', 'field' => array('User.username', 'UserInfo.first_name')),
        'tags' => array('type' => 'subquery', 'method' => 'findByTags', 'field' => 'Jobcard.id'),
        'filter' => array('type' => 'query', 'method' => 'orConditions'),
        'enhanced_search' => array('type' => 'like', 'encode' => true, 'before' => false, 'after' => false, 'field' => array('Jobcard.name', 'OtherModel.name')),
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
