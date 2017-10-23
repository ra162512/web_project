<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PlayersTable extends Table {

    public function validationDefault(Validator $validator) {
        return $validator
                        ->notEmpty('email', "Un e-mail est nÃ©cessaire")
                        ->notEmpty('password', 'Un mot de passe est nÃ©cessaire');
    }

}
