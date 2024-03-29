<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 50)
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 50)
            ->notEmptyString('last_name');

        $validator
            ->date('DateofBirth')
            ->notEmptyString('DateofBirth');

        $validator
            ->email('email')
            ->notEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 15)
            ->notEmptyString('phone');

        $validator
            ->scalar('street')
            ->maxLength('street', 255)
            ->notEmptyString('street');

        $validator
            ->scalar('suburb')
            ->maxLength('suburb', 100)
            ->notEmptyString('suburb');

        $validator
            ->scalar('post_code')
            ->maxLength('post_code', 10)
            ->notEmptyString('post_code');

        $validator
            ->scalar('state')
            ->maxLength('state', 50)
            ->notEmptyString('state');

        $validator
            ->scalar('customer_image')
            ->maxLength('customer_image', 5000)
            ->notEmptyString('customer_image');

        $validator
            ->scalar('password')
            ->maxLength('password', 1000)
            ->notEmptyString('password');

        $validator
            ->sameAs('retype_password', 'password', 'Passwords do not match!');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
    public function beforeDelete($event, $entity, $options)
    {
        if ($entity->id ==8 ) {
            return false;
        }
        return true;
    }

    public function validationResetPassword(Validator $validator): Validator {
        $validator
            ->scalar('password')
            ->requirePresence('password', 'reset-password')
            ->notEmptyString('password');

        // Validate retyped password
        $validator
            ->requirePresence('password_confirm', 'reset-password')
            ->sameAs('password_confirm', 'password', 'Both passwords must match');

        $validator
            ->uuid('nonce')
            ->maxLength('nonce', 128)
            ->allowEmptyString('nonce');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */

}
