<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sessions Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\BelongsTo $Employees
 * @property \App\Model\Table\QuotesTable&\Cake\ORM\Association\BelongsTo $Quotes
 * @property \App\Model\Table\ServicesTable&\Cake\ORM\Association\BelongsTo $Services
 *
 * @method \App\Model\Entity\Session newEmptyEntity()
 * @method \App\Model\Entity\Session newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Session[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Session get($primaryKey, $options = [])
 * @method \App\Model\Entity\Session findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Session patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Session[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Session|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Session saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Session[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Session[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Session[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Session[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SessionsTable extends Table
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

        $this->setTable('sessions');
        $this->setDisplayField('session_id');
        $this->setPrimaryKey('session_id');

        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id',
        ]);
        $this->belongsTo('Quotes', [
            'foreignKey' => 'quote_id',
        ]);
        $this->belongsTo('Services', [
            'foreignKey' => 'service_id',
        ]);
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
            ->date('session_date')
            ->requirePresence('session_date', 'create')
            ->notEmptyDate('session_date');

        $validator
            ->time('session_start')
            ->requirePresence('session_start', 'create')
            ->notEmptyTime('session_start');

        $validator
            ->scalar('session_notes')
            ->maxLength('session_notes', 255)
            ->allowEmptyString('session_notes');

        $validator
            ->scalar('customer_first_name')
            ->maxLength('customer_first_name', 255)
            ->requirePresence('customer_first_name', 'create')
            ->notEmptyString('customer_first_name');

        $validator
            ->scalar('customer_last_name')
            ->maxLength('customer_last_name', 255)
            ->requirePresence('customer_last_name', 'create')
            ->notEmptyString('customer_last_name');

        $validator
            ->scalar('customer_email')
            ->maxLength('customer_email', 255)
            ->requirePresence('customer_email', 'create')
            ->notEmptyString('customer_email');

        $validator
            ->scalar('customer_phone_number')
            ->maxLength('customer_phone_number', 255)
            ->requirePresence('customer_phone_number', 'create')
            ->notEmptyString('customer_phone_number');

        $validator
            ->scalar('service_name')
            ->maxLength('service_name', 255)
            ->requirePresence('service_name', 'create')
            ->notEmptyString('service_name');

        $validator
            ->integer('employee_id')
            ->allowEmptyString('employee_id');

        $validator
            ->integer('quote_id')
            ->allowEmptyString('quote_id');

        $validator
            ->integer('service_id')
            ->allowEmptyString('service_id');

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
        $rules->add($rules->existsIn('employee_id', 'Employees'), ['errorField' => 'employee_id']);
        $rules->add($rules->existsIn('quote_id', 'Quotes'), ['errorField' => 'quote_id']);
        $rules->add($rules->existsIn('service_id', 'Services'), ['errorField' => 'service_id']);

        return $rules;
    }
}
