<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PriceGroupValues Model
 *
 * @property \App\Model\Table\PriceGroupsTable|\Cake\ORM\Association\BelongsTo $PriceGroups
 * @property \App\Model\Table\PhotoSizesTable|\Cake\ORM\Association\BelongsTo $PhotoSizes
 *
 * @method \App\Model\Entity\PriceGroupValue get($primaryKey, $options = [])
 * @method \App\Model\Entity\PriceGroupValue newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PriceGroupValue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PriceGroupValue|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PriceGroupValue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PriceGroupValue[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PriceGroupValue findOrCreate($search, callable $callback = null, $options = [])
 */
class PriceGroupValuesTable extends Table
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

        $this->setTable('price_group_values');
        $this->setDisplayField('price_group_id');
        $this->setPrimaryKey(['price_group_id', 'photo_size_id']);


//        $this->hasOne('PhotoSizes', [
//            'foreignKey' => 'photo_size_id'
//        ]);

        $this->belongsTo('PriceGroups', [
            'foreignKey' => 'price_group_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PhotoSizes', [
            'foreignKey' => 'photo_size_id',
            'joinType' => 'INNER'
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
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->integer('is_active')
            ->allowEmpty('is_active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['price_group_id'], 'PriceGroups'));
        $rules->add($rules->existsIn(['photo_size_id'], 'PhotoSizes'));

        return $rules;
    }
}
