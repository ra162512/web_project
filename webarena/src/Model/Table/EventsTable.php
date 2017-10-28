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
   
}
