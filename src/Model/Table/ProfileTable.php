<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profile Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Profile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Profile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profile|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profile findOrCreate($search, callable $callback = null, $options = [])
 */
class ProfileTable extends Table
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

        $this->setTable('profile');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'profile_id'
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
            ->scalar('uniquehandle')
            ->maxLength('uniquehandle', 255)
            ->requirePresence('uniquehandle', 'create')
            ->notEmpty('uniquehandle');

        $validator
            ->integer('position')
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        $validator
            ->scalar('current_institution')
            ->maxLength('current_institution', 255)
            ->requirePresence('current_institution', 'create')
            ->notEmpty('current_institution');

        $validator
            ->scalar('website')
            ->maxLength('website', 50)
            ->requirePresence('website', 'create')
            ->notEmpty('website');

        $validator
            ->scalar('region')
            ->maxLength('region', 50)
            ->requirePresence('region', 'create')
            ->notEmpty('region');

        $validator
            ->scalar('skills')
            ->maxLength('skills', 255)
            ->requirePresence('skills', 'create')
            ->notEmpty('skills');

        $validator
            ->scalar('about')
            ->requirePresence('about', 'create')
            ->notEmpty('about');

        $validator
            ->scalar('link1')
            ->maxLength('link1', 255)
            ->requirePresence('link1', 'create')
            ->notEmpty('link1');

        $validator
            ->scalar('link2')
            ->maxLength('link2', 255)
            ->requirePresence('link2', 'create')
            ->notEmpty('link2');

        $validator
            ->scalar('link3')
            ->maxLength('link3', 255)
            ->requirePresence('link3', 'create')
            ->notEmpty('link3');

        $validator
            ->scalar('link4')
            ->maxLength('link4', 255)
            ->requirePresence('link4', 'create')
            ->notEmpty('link4');

        $validator
            ->scalar('link5')
            ->maxLength('link5', 255)
            ->requirePresence('link5', 'create')
            ->notEmpty('link5');

        return $validator;
    }
}
