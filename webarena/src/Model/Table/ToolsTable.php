<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;
use Cake\ORM\Table;
/**
 * Description of ToolsTable
 *
 * @author attali
 */
class ToolsTable extends Table{
    
   public function alltoolsTable(){
          $query = $this->find('all');
            return ($query->toArray());
    }
        public function recupererbonustool($postoo)
    {
        $postooX=$postoo[0];
        $postooY=$postoo[1];
        $query=$this->find('all')
                ->select(['bonus'])
                ->where(['coordinate_x' => $postooX, 'coordinate_y'=>$postooY]);
               foreach ($query as $row){
            $bonus = $row->bonus;
            
        }    
         return $bonus;

       
    }
             public function recuperertypetool($postoo)
    {
        $postooX=$postoo[0];
        $postooY=$postoo[1];
        $query=$this->find('all')
                ->select(['type'])
                ->where(['coordinate_x' => $postooX, 'coordinate_y'=>$postooY]);
               foreach ($query as $row){
            $type = $row->type;
            
        }    
         return $type;
         
       
    }   

    public function effacertool($postoo,$player_id)
    {
        $postooX=$postoo[0];
        $postooY=$postoo[1];
         $query=$this->find('all')
                ->where(['coordinate_x' => $postooX, 'coordinate_y'=>$postooY]);
         
   
                     $query->delete()
                    ->execute();
                          
    }
        public function coeur() {
        
        $query = $this->find('all');
        
        if ($query->count()<=10){
        $query->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'coeur','bonus'=>1, 'coordinate_x' => rand(1,10), 'coordinate_y' => rand(1,15)])
                ->execute(); 
        }      
    }
      
    public function vue() {
        $query = $this->find('all');
        
        if ($query->count()<=10){
        $query->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'vue','bonus'=>1, 'coordinate_x' => rand(1,10), 'coordinate_y' => rand(1,15)])
                ->execute(); 
        }      
    }
    
    public function epee() {
        $query = $this->find('all');
        
        if ($query->count()<=10){
        $query->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'epee','bonus'=>1, 'coordinate_x' => rand(1,10), 'coordinate_y' => rand(1,15)])
                ->execute(); 
        }      
    }
    
    public function deleteTools(){
        $query = $this->find('all');
        $query->delete()->execute();
    }
    public function existtools(){
         $query = $this->find('all');
       return ($query->toArray());
    }
}
