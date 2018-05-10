<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Advertisements Model
 *
 * @method \App\Model\Entity\Advertisement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Advertisement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Advertisement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Advertisement|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Advertisement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Advertisement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Advertisement findOrCreate($search, callable $callback = null, $options = [])
 */
class AdvertisementsTable extends Table
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

        $this->setTable('advertisements');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmpty('description');

        $validator
            ->scalar('image_url')
            ->maxLength('image_url', 255)
            ->requirePresence('image_url', 'create')
            ->notEmpty('image_url');

        $validator
            ->scalar('ads_url')
            ->maxLength('ads_url', 255)
            ->requirePresence('ads_url', 'create')
            ->notEmpty('ads_url');

        $validator
            ->scalar('text1')
            ->maxLength('text1', 255)
            ->allowEmpty('text1');

        $validator
            ->scalar('ads_type')
            ->maxLength('ads_type', 255)
            ->requirePresence('ads_type', 'create')
            ->notEmpty('ads_type');

        $validator
            ->boolean('is_active')
            ->allowEmpty('is_active');

        return $validator;
    }
}
