<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * Description of fighterTable
 *
 * @author attali
 */
class FightersTable extends Table {

    //put your code here
    public function test() {


        return "ok";
    }

    public function getBestFighter() {
        
        $fighter1 = $this
                ->find('all')
                ->order(['level' => 'DESC'])
                ->first()
        ;
        return $fighter1;
    }
    
    
    
    public function getallFighterssender($id_receiver) {

               
      $listeplayer=array();
       $i=0;
        $query = $this->find()
                ->select(['name',])
                ->where(['player_id' => $id_receiver]);
                
        
        foreach ($query as $row) {
           $listeplayer[$i]=$row->name;
           $i=$i+1;
                            
          
    }
     return $listeplayer;

}
   
    public function getallFightersreceiver1($id_receiver) {

               
      $listeplayer=array();
       $i=0;
        $query = $this->find()
                ->select(['name',])
                ->where(['player_id !=' => $id_receiver]);
                
        
        foreach ($query as $row) {
           $listeplayer[$i]=$row->name;
           $i=$i+1;
                            
          
    }
     return $listeplayer;

}

    public function getallFighters() {

               
      $listeplayer=array();
       $i=0;
        $query = $this->find('all');
                
                
        
        foreach ($query as $row) {
           $listeplayer[$i]=$row->name;
           $i=$i+1;
                            
          
    }
     return $listeplayer;

}




   public function find_id($name){
                       
    
      $query = $this->find()
    ->select(['id',])
    ->where(['name' => $name]);
                
        foreach ($query as $row) {
          $id=$row->id;
                            
          
    }
        
     return $id;
                            
         
    }
    
    
       public function recuperernom($listid){
                       

    $listname=array();
    for($i=0;$i<count($listid);$i++){
      $query = $this->find()
    ->select(['name'])
    ->where(['id' => $listid[$i]]);
                
        foreach ($query as $row) {
          $listname[$i]=$row->name;
                            
          }
    }
     return $listname;
                            
         
    }
}






