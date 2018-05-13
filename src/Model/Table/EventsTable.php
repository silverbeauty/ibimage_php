<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property |\Cake\ORM\Association\BelongsTo $ParentEvents
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property |\Cake\ORM\Association\BelongsTo $PriceGroups
 * @property |\Cake\ORM\Association\HasMany $EventAdsClick
 * @property \App\Model\Table\EventMetasTable|\Cake\ORM\Association\HasMany $EventMetas
 * @property \App\Model\Table\EventSharesTable|\Cake\ORM\Association\HasMany $EventShares
 * @property |\Cake\ORM\Association\HasMany $ChildEvents
 * @property \App\Model\Table\PhotoSharesTable|\Cake\ORM\Association\HasMany $PhotoShares
 * @property \App\Model\Table\PhotosTable|\Cake\ORM\Association\HasMany $Photos
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null, $options = [])
 */
class EventsTable extends Table
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

        $this->setTable('events');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('ParentEvents', [
            'className' => 'Events',
            'foreignKey' => 'parent_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PriceGroups', [
            'foreignKey' => 'price_group_id'
        ]);
        $this->hasMany('EventAdsClick', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('EventMetas', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('EventShares', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('ChildEvents', [
            'className' => 'Events',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('PhotoShares', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Photos', [
            'foreignKey' => 'event_id'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmpty('description');

        $validator
            ->scalar('place')
            ->maxLength('place', 255)
            ->requirePresence('place', 'create')
            ->notEmpty('place');

        $validator
            ->dateTime('started')
            ->requirePresence('started', 'create')
            ->notEmpty('started');

        $validator
            ->dateTime('ended')
            ->allowEmpty('ended');

        $validator
            ->boolean('is_approved')
            ->allowEmpty('is_approved');

        $validator
            ->boolean('is_share')
            ->allowEmpty('is_share');

        $validator
            ->integer('banner_top_left')
            ->allowEmpty('banner_top_left');

        $validator
            ->integer('banner_top_center')
            ->allowEmpty('banner_top_center');

        $validator
            ->integer('banner_top_right')
            ->allowEmpty('banner_top_right');

        $validator
            ->integer('banner_bottom_left')
            ->allowEmpty('banner_bottom_left');

        $validator
            ->integer('banner_bottom_center')
            ->allowEmpty('banner_bottom_center');

        $validator
            ->integer('banner_bottom_right')
            ->allowEmpty('banner_bottom_right');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentEvents'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['price_group_id'], 'PriceGroups'));

        return $rules;
    }
}
