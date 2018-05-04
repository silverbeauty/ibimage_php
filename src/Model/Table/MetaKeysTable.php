<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MetaKeys Model
 *
 * @method \App\Model\Entity\MetaKey get($primaryKey, $options = [])
 * @method \App\Model\Entity\MetaKey newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MetaKey[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MetaKey|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MetaKey patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MetaKey[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MetaKey findOrCreate($search, callable $callback = null, $options = [])
 */
class MetaKeysTable extends Table
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

        $this->setTable('meta_keys');
        $this->setDisplayField('id');
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
            ->scalar('meta_key')
            ->maxLength('meta_key', 255)
            ->requirePresence('meta_key', 'create')
            ->notEmpty('meta_key');

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
