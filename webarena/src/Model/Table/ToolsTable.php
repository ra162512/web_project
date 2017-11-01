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
    public function createTools(){
        $query = $this->query();
        $query2 = $this->query();
        $query3 = $this->query();
        $query4 = $this->query();
        $query5 = $this->query();
        $query6 = $this->query();
        $query7 = $this->query();
        $query8 = $this->query();
        $query9 = $this->query();
        $query10 = $this->query();
        
        $query->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'epee3.png','bonus'=>1, 'coordinate_x' => rand(0,10), 'coordinate_y' => rand(0,15)])
                ->execute();
        $query2->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'superepee2.png','bonus'=>2, 'coordinate_x' => rand(0,10), 'coordinate_y' => rand(0,15)])
                ->execute();
        $query3->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'armehast2.png','bonus'=>3, 'coordinate_x' => rand(0,10), 'coordinate_y' => rand(0,15)])
                ->execute();
        $query4->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'hache1.png','bonus'=>4, 'coordinate_x' => rand(0,10), 'coordinate_y' => rand(0,15)])
                ->execute();
        $query5->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'vue1.png','bonus'=>2, 'coordinate_x' => rand(0,10), 'coordinate_y' => rand(0,15)])
                ->execute();
        $query6->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'epee2.png','bonus'=>1, 'coordinate_x' => rand(0,10), 'coordinate_y' => rand(0,15)])
                ->execute();
        $query7->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'vue2.png','bonus'=>1, 'coordinate_x' => rand(0,10), 'coordinate_y' => rand(0,15)])
                ->execute();
        $query8->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'coeur2.png','bonus'=>3, 'coordinate_x' => rand(0,10), 'coordinate_y' => rand(0,15)])
                ->execute();
        $query9->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'coeur1.png','bonus'=>2, 'coordinate_x' => rand(0,10), 'coordinate_y' => rand(0,15)])
                ->execute();
        $query10->insert(['type','bonus','coordinate_x','coordinate_y'])
                ->values(['type' => 'vue1.png','bonus'=>2, 'coordinate_x' => rand(0,10), 'coordinate_y' => rand(0,15)])
                ->execute();
    }
}
