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
                ->first();
        return $fighter1;
    }
    
    public function dplct($direction,$id,$tableau_buisson,$tableau_fighter) {
        $posX = 0;
        $posY = 0;
        
        
        
        
        $query = $this->find('all')
                ->select(['coordinate_x','coordinate_y'])
                ->where(['player_id' => $id]);
        
        foreach ($query as $row){
            $posX = $row->coordinate_x;
            $posY = $row->coordinate_y;
        }        
            
            if ($direction == 0&& $posX>1&&$tableau_buisson[$posX-1][$posY]!=1&&$tableau_fighter[$posX-1][$posY]!=1){
                $query->update()                   
                        ->set(['coordinate_x' => $posX -1])
                        ->execute();
                $message = 'Vous allez en haut';
            }                        
            else if ($direction == 1&& $posX<10&&$tableau_buisson[$posX+1][$posY]!=1&&$tableau_fighter[$posX+1][$posY]!=1){
                $query->update()                   
                        ->set(['coordinate_x' => $posX +1])
                        ->execute();
                $message  ='Vous allez en bas';
            }
            else if ($direction == 2&& $posY<15&&$tableau_buisson[$posX][$posY+1]!=1&&$tableau_fighter[$posX][$posY+1]!=1){
                $query->update()                   
                        ->set(['coordinate_y' => $posY +1])
                        ->execute();
                $message  ='Vous allez à droite';
            }
            else if ($direction == 3&& $posY>1&&$tableau_buisson[$posX][$posY-1]!=1&&$tableau_fighter[$posX][$posY-1]!=1){
                $query->update()                   
                        ->set(['coordinate_y' => $posY -1])
                        ->execute();
                $message  ='Vous allez à gauche';
            }
            else{
                $message="Et ben non, vous ne pouvez pas vous deplacer ici";
                }
            return $message;
        }
        
        public function recupererfightervision($id){
            
                    $query = $this->find('all')
                ->select(['skill_sight'])
                ->where(['player_id' => $id]);
                    foreach ($query as $row){
            $sight = $row->skill_sight;
       
        }
                return $sight;
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
    public function getallFightersall() {                 
        $query = $this->find('all');
        return ($query->toArray());
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
    
    
   public function find_pos($id){
                       
       $position=array();
      $query = $this->find()
    ->select(['coordinate_x','coordinate_y'])
    ->where(['player_id' => $id]);
                
        foreach ($query as $row) {
         
            $position[0]=$row->coordinate_x;
            $position[1]=$row->coordinate_y;
                            
      }

      return $position;
        
    }
    
   
}





