<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PriceGroups Model
 *
 * @property \App\Model\Table\PriceGroupValuesTable|\Cake\ORM\Association\HasMany $PriceGroupValues
 *
 * @method \App\Model\Entity\PriceGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\PriceGroup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PriceGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PriceGroup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PriceGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PriceGroup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PriceGroup findOrCreate($search, callable $callback = null, $options = [])
 */
class PriceGroupsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('price_groups');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('PriceGroupValues', [
            'foreignKey' => 'price_group_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('group_name')
            ->maxLength('group_name', 255)
            ->requirePresence('group_name', 'create')
            ->notEmpty('group_name');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmpty('description');

        $validator
            ->boolean('is_active')
            ->allowEmpty('is_active');

        return $validator;
    }
}
