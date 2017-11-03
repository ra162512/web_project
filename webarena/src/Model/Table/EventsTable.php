<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;
use Cake\ORM\Table;
/**
 * Description of EventTable
 *
 * @author attali
 */
class EventsTable extends Table {
    
    public function allEvents(){
          $query = $this->find('all');
            return ($query->toArray());
    }
       
    public function fairelecri(){
        $query = $this->find('all');
            
    }
    public function allEvents_portee_devue($sight,$position){
        $posX=$position[0];
        $posY=$position[1];
        $tabevents=array();
        $i=0;
        $heure = date("H");
        $query = $this->find('all')
                ->order(['date' => 'ASC']);
             
       foreach($query as $row){
           
           $coorX=$row->coordinate_x;
           $coorY=$row->coordinate_y;
           $date=$row->date;
           if(((abs($posX-$coorX)+abs($posY-$coorY))<=$sight)&&$date->wasWithinLast('24 hours'))
           {
               $tabevents[$i]=$row;
                $i++;
           }
          
       }
      
       return $tabevents;      
           
    }

}
