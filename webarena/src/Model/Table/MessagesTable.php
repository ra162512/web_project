<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
/**
 * Description of MessageTable
 *
 * @author attali
 */
class MessagesTable extends Table {
    
 
    public function recuperermessages ($id_fighter,$id_fighter2){
    
       $titres=array();
       $id=array();
       $i=0;
       $message=array(); 
       $date=array();
   
        $query = $this->find()
        ->select(['fighter_id_from','title','message','date'])
        ->where(['fighter_id' => $id_fighter,'OR' => ['fighter_id_from' =>$id_fighter2 ]])
        ->orWhere(['fighter_id' => $id_fighter2,'OR' => ['fighter_id_from' =>$id_fighter ]])
        ->order(['date' => 'ASC']);
     
          foreach ($query as $row) {
        
              
              
              $id[$i]=$row->fighter_id_from;
          $titres[$i]=$row->title;
          $message[$i]=$row->message;
          $date[$i]=$row->date;
          $i++;
        }
        $ensemble_messages=array($titres,$id,$message,$date);
        return $ensemble_messages;
    }
    //put your code here
}
