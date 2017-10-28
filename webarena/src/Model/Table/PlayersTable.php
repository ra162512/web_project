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

     public function getallPlayers() {

               
      $listeplayer=array();
       $i=0;
        $query = $this->find('all');
        
        foreach ($query as $row) {
           $listeplayer[$i]=$row->email;
           $i=$i+1;
                            
          
    }
    
    return $listeplayer; 
    
    
    }
    public function id_desti($mail_desti){
                       
    
        $query = $this->find()
    ->select(['id',])
    ->where(['' => $mail_desti]);
                
        foreach ($query as $row) {
          $mail_dest=$row->id;
                            
          
    }
        
     return $mail_dest;
                            
          
    }
        
        
        
    }

    
    

