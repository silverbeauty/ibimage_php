<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class OptionsTable extends Table {
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('options');
        $this->setPrimaryKey('option_key');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('option_key')
            ->maxLength('option_key', 255)
            ->requirePresence('option_key', 'create')
            ->notEmpty('option_key');

        $validator
            ->scalar('option_value')
            ->requirePresence('option_value', 'create')
            ->notEmpty('option_value');

        return $validator;
    }

}