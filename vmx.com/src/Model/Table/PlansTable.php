<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Plans Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Plan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Plan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Plan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Plan|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Plan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Plan findOrCreate($search, callable $callback = null, $options = [])
 */
class PlansTable extends Table
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

        $this->setTable('plans');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'plan_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 45)
            ->allowEmptyString('title');

        $validator
            ->numeric('value')
            ->allowEmptyString('value');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->integer('articles')
            ->allowEmptyString('articles');

        return $validator;
    }
}
