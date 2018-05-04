<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PhotoSizes Model
 *
 * @method \App\Model\Entity\PhotoSize get($primaryKey, $options = [])
 * @method \App\Model\Entity\PhotoSize newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PhotoSize[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PhotoSize|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PhotoSize patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PhotoSize[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PhotoSize findOrCreate($search, callable $callback = null, $options = [])
 */
class PhotoSizesTable extends Table
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

        $this->setTable('photo_sizes');
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
            ->boolean('is_active')
            ->requirePresence('is_active', 'create')
            ->allowEmpty('is_active');

        $validator
            ->numeric('default_price')
            ->requirePresence('default_price', 'create')
            ->allowEmpty('default_price');

        return $validator;
    }
}
