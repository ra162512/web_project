<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PlayersTable extends Table
{

       public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', "Un nom d'utilisateur est nécessaire")
            ->notEmpty('password', 'Un mot de passe est nécessaire')
            ->notEmpty('role', 'Un role est nécessaire')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'author']],
                'message' => 'Merci de rentrer un role valide'
            ]);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

