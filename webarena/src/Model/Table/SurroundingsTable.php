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
        $table = array();
        $case = array();
        $i = 0;
        $query = $this
                ->find('all')
        ;
        foreach($query as $row){
            $case[0] = $row->id;
            $case[1] = $row->type;            
            $case[2] = $row->coordinate_x;           
            $case[3] = $row->coordinate_y;
            $table[$i] = $case;
            $i++;
        }
        
        return $table;
        
    }
}
