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
        public function recuperertool($postoo)
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

    public function effacertool($postoo,$player_id)
    {
        $postooX=$postoo[0];
        $postooY=$postoo[1];
         $query=$this->find('all')
                ->where(['coordinate_x' => $postooX, 'coordinate_y'=>$postooY]);
         
   
                     $query->delete()
                    ->execute();
                          
    }
}
