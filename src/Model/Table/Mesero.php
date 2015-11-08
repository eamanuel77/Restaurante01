<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class Meseros extends Table {
    
   public function initialize(array $config) {
       $this->addBehavior('Timestamp');
   }
    
    public function validationDefault(Validator $validator) {
        $validator
            ->validatePrecense('nombre')
            ->notEmpty('nombre','Campor Necesario.')
            ->add('nombre',('rule' => 'notEmpty'))
            
        
        return $validator;
        
    }
    
    
   
    
}