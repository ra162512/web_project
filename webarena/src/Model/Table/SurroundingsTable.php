<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;

use Cake\ORM\Table;
/**
 * Description of SurroundingsTable
 *
 * @author Kow AME
 */
class SurroundingsTable extends Table {
    //put your code here
    public function allCases() {
        
        $query = $this
                ->find('all');
      
        
        return ($query->toArray());    
    }
    
    public function buiss() {
        $x = rand(1,10);
        $y = rand(1,15);
        
        $query = $this->find('all');
        
        if ($query->count()<=10){
        $query->insert(['type','coordinate_x','coordinate_y'])
                ->values(['type' => 'buisson', 'coordinate_x' => $x, 'coordinate_y' => $y])
                ->execute(); 
        }      
    }
      
    public function pierre() {
        $x = rand(1,10);
        $y = rand(1,15);
        $query = $this->find('all');
        
        if ($query->count()<=10){
        $query->insert(['type','coordinate_x','coordinate_y'])
                ->values(['type' => 'pierre', 'coordinate_x' => $x, 'coordinate_y' => $y])
                ->execute(); 
        }      
    }
    
    public function arbre() {
        $x = rand(1,10);
        $y = rand(1,15);
        $query = $this->find('all');
        
        if ($query->count()<=10){
        $query->insert(['type','coordinate_x','coordinate_y'])
                ->values(['type' => 'arbre', 'coordinate_x' => $x, 'coordinate_y' => $y])
                ->execute(); 
        }      
    }
    
    public function deleteSurrounds(){
        $query = $this->find('all');
        $query->delete()->execute();
    }
    
}
