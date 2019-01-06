<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 *
 * @method \App\Model\Entity\Post get($primaryKey, $options = [])
 * @method \App\Model\Entity\Post newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Post[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Post|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Post|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Post patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Post[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Post findOrCreate($search, callable $callback = null, $options = [])
 */
class PostsTable extends Table
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

        $this->setTable('posts');
        $this->setDisplayField('PostID');
        $this->setPrimaryKey('PostID');
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
            ->integer('PostID')
            ->allowEmpty('PostID', 'create');

        $validator
            ->scalar('PostTitle')
            ->maxLength('PostTitle', 255)
            ->requirePresence('PostTitle', 'create')
            ->notEmpty('PostTitle');

        $validator
            ->dateTime('PostDate')
            ->requirePresence('PostDate', 'create')
            ->notEmpty('PostDate');

        $validator
            ->scalar('PostAuthor')
            ->maxLength('PostAuthor', 50)
            ->requirePresence('PostAuthor', 'create')
            ->notEmpty('PostAuthor');

        $validator
            ->scalar('PostContent')
            ->maxLength('PostContent', 1000)
            ->allowEmpty('PostContent');

        $validator
            ->scalar('PostDesc')
            ->maxLength('PostDesc', 255)
            ->allowEmpty('PostDesc');

        $validator
            ->scalar('PostThread')
            ->maxLength('PostThread', 100)
            ->allowEmpty('PostThread');

        $validator
            ->scalar('PostSlug')
            ->maxLength('PostSlug', 255)
            ->allowEmpty('PostSlug');

        return $validator;
    }
}
