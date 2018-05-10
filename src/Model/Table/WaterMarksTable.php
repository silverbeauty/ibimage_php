<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WaterMarks Model
 *
 * @method \App\Model\Entity\WaterMark get($primaryKey, $options = [])
 * @method \App\Model\Entity\WaterMark newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WaterMark[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WaterMark|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WaterMark patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WaterMark[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WaterMark findOrCreate($search, callable $callback = null, $options = [])
 */
class WaterMarksTable extends Table
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

        $this->setTable('water_marks');
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
            ->scalar('hover_text')
            ->maxLength('hover_text', 255)
            ->allowEmpty('hover_text');

        $validator
            ->scalar('image_url')
            ->maxLength('image_url', 255)
            ->requirePresence('image_url', 'create')
            ->notEmpty('image_url');

        $validator
            ->scalar('fb_image_url')
            ->maxLength('fb_image_url', 255)
            ->allowEmpty('fb_image_url');

        $validator
            ->scalar('tw_image_url')
            ->maxLength('tw_image_url', 255)
            ->allowEmpty('tw_image_url');

        $validator
            ->scalar('it_image_url')
            ->maxLength('it_image_url', 255)
            ->allowEmpty('it_image_url');

        $validator
            ->scalar('sn_image_url')
            ->maxLength('sn_image_url', 255)
            ->allowEmpty('sn_image_url');

        $validator
            ->scalar('pt_image_url')
            ->maxLength('pt_image_url', 255)
            ->allowEmpty('pt_image_url');

        $validator
            ->boolean('is_active')
            ->allowEmpty('is_active');

        return $validator;
    }
}
