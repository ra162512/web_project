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
            $posX = $row->coordinate_x-1;
            $posY = $row->coordinate_y-1;
        }        
            
            if ($direction == 0&& $posX>=1&&$tableau_buisson[$posX-1][$posY]!=1&&$tableau_fighter[$posX-1][$posY]!=1){
                $query->update()                   
                        ->set(['coordinate_x' => $posX ])
                        ->execute();
                $message = 'You go up';
            }                        
            else if ($direction == 1&& $posX<9&&$tableau_buisson[$posX+1][$posY]!=1&&$tableau_fighter[$posX+1][$posY]!=1){
                $query->update()                   
                        ->set(['coordinate_x' => $posX +2])
                        ->execute();
                $message  ='You go down';
            }
            else if ($direction == 2&& $posY<14&&$tableau_buisson[$posX][$posY+1]!=1&&$tableau_fighter[$posX][$posY+1]!=1){
                $query->update()                   
                        ->set(['coordinate_y' => $posY +2])
                        ->execute();
                $message  ='You go on the right';
            }
            else if ($direction == 3&& $posY>=1&&$tableau_buisson[$posX][$posY-1]!=1&&$tableau_fighter[$posX][$posY-1]!=1){
                $query->update()                   
                        ->set(['coordinate_y' => $posY])
                        ->execute();
                $message  ='You go on the left';
            }
            else{
                $message="I'm sorry, but you can't go there";
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
      public function find_sight($name){
                       
    
      $query = $this->find()
    ->select(['skill_sight',])
    ->where(['name' => $name]);
                
        foreach ($query as $row) {
          $sight=$row->skill_sight;
                            
          
    }
        
     return $sight;
                            
         
    }
    
    
    
    
    
    
     public function find_strength($name){
                       
    
      $query = $this->find()
    ->select(['skill_strength',])
    ->where(['name' => $name]);
                
        foreach ($query as $row) {
          $skill_strength=$row->skill_strength;
                            
          
    }
        
     return $skill_strength;
                            
         
    }
       public function find_health($name){
                       
    
      $query = $this->find()
    ->select(['skill_health',])
    ->where(['name' => $name]);
                
        foreach ($query as $row) {
          $skill_health=$row->skill_health;
                            
          
    }
        
     return $skill_health;
                            
         
    }
    
    
    
    public function find_xp($name){
                       
    
      $query = $this->find()
    ->select(['xp',])
    ->where(['name' => $name]);
                
        foreach ($query as $row) {
          $xp=$row->xp;
                            
          
    }
        
     return $xp;
                            
         
    }
       public function find_level($name){
                       
    
      $query = $this->find()
    ->select(['level',])
    ->where(['name' => $name]);
                
        foreach ($query as $row) {
          $level=$row->level;
                            
          
    }
        
     return $level;
                            
         
    }
    
    
    public function upgradeCaracteristics($id, $selection){
          
          $query = $this->find('all')
                ->select(['skill_sight','skill_strength','skill_health','level'])
                ->where(['id' => $id]);
                  foreach ($query as $row){
            $skill_stre = $row->skill_strength;
            $skill_hea = $row->skill_health;
            $skill_sig=$row->skill_sight;
            $level=$row->level;
        }    
          if ($selection==1){
          $query->update()                   
                  ->set(['skill_strength' => $skill_stre +1])
                  ->set(['level' => $level +1])
                  ->execute();
          }
          if ($selection==2){
          $query->update()                   
                        ->set(['skill_health' => $skill_hea +1])
                        ->set(['level' => $level +1])
                        ->execute();
          }
          if ($selection==3){
          $query->update()                   
                        ->set(['skill_sight' => $skill_sig +1])
                  ->set(['level' => $level +1])
                        ->execute();
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
    
     
          public function attraper($id,$position,$bonus,$type){
          
          $posX=$position[0];
          $posY=$position[1];
          $query = $this->find('all')
                ->select(['skill_sight','skill_strength','skill_health','name'])
                ->where(['player_id' => $id]);
                  foreach ($query as $row){
            $skill_stre = $row->skill_strength;
            $skill_hea = $row->skill_health;
            $skill_sig=$row->skill_sight;
            $name=$row->name;
        }
        
        if($type=="epee")
                 {$query->update()                   
                        ->set(['skill_strength' => $skill_stre +$bonus])
                        ->execute();
                 }
        if($type=="vue")
                 {$query->update()                   
                        ->set(['skill_sight' => $skill_sig +$bonus])
                        ->execute();
                 }
        if($type=="coeur")
                 {$query->update()                   
                        ->set(['skill_health' => $skill_hea +$bonus])
                        ->execute();
                 }                 
            $infosevent=array($posX,$posY,$name,$type);
          return $infosevent;
      }
      
      
    public function attaquer($notre_id,$pos_adv_x,$pos_adv_y) {        
            
         $query = $this->find('all')
        ->where(['coordinate_x' => $pos_adv_x,'coordinate_y'=>$pos_adv_y]);
        $query1 = $this->find('all')
        ->where(['player_id' => $notre_id]);
        foreach ($query as $row){
            $level_adv= $row->level;
            $health=$row->skill_health;
            $name_adv=$row->name;
        }
        foreach ($query1 as $row){
            $level_mon= $row->level;
            $strength=$row->skill_strength;
            $xp=$row->xp;
            $name_att=$row->name;
        }         
        
        
        $aleat=rand(1,20);
        if($aleat>10+$level_adv-$level_mon)
        {
            
            
           
           if($health>$strength){
           $query->update()                   
                 ->set(['skill_health' =>$health-$strength ])
                 ->execute(); 
            $query1->update()                   
                 ->set(['xp' =>$xp+1 ])
                 ->execute(); 
          
           $message="attaque réussie bravo!" ;
           $mort_ounon=1;
           }
           else{
                           $query1->update()                   
                 ->set(['xp' =>$xp+$level_adv ])
                 ->execute(); 
               
                    $query->delete()
                    ->execute();
                    
           $message="bravo tu l'as buté!" ;
           $mort_ounon=2;
           }
            
        }
        else {
            $message="malheuresement l'attaque n'as pas réussie";
            $mort_ounon=0;
            }
        
        $infos_event=array($message,$name_adv,$name_att,$mort_ounon);
        return $infos_event;
    }
    
    public function existfig($player_id){
         $query = $this->find('all')
        ->where(['player_id' => $player_id]);
       return ($query->toArray());
    }
}





