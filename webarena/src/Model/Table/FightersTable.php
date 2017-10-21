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

}
