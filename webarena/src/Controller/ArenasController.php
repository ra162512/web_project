<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Controller\AppController;

/**
 * Description of ArenasController
 *
 * @author Yacine
 */

class ArenasController extends AppController
{
    
    public function index()
    {
            // die('test');
        $this->set('myname', "Inconnu");

        //$this->loadModel('Fighters');
        //$figterlist=$this->Fighters->find('all');
        //pr($figterlist->toArray());
    }

    public function changepassword() {
        $messagechangemdp="</br> Aucun changement effectué";
        if($this->request->is('post')){
          $data= $this->request->data;
          $this->loadModel('Players');
          $joueur=$this->Players->find('all')->where(['Players.email' => $data['name']]);
          $joueur = $joueur->first();
          if($joueur['password'] == $data['ancienMDP'] =! null AND $joueur['email'] == $data['name'] =! null ){
            $joueur->password= $data['newMPD'];
            $this->Players->save($joueur);
            $messagechangemdp="mot de passe modifié";
          }
          else{
              $messagechangemdp="Identifiants incorrects";
            }
          }
          $this->set('messagechangemdp',$messagechangemdp);
        }
        //$messagechangemdp="Le nouveau mot de passe doit être différent de l'ancien";

    public function login()
    {
      $message="</br> Veuillez vous connecter";
      
      if($this->request->is('post')){
            $data= $this->request->data;
            $this->loadModel('Players');
            $joueur=$this->Players->find('all')->where(['Players.email' => $data['userName']]);
            $joueur = $joueur->first();
        
        if($joueur['password'] == $data['password'] =! null AND $joueur['email'] == $data['userName'] =! null ){
          $message="Connexion réussie";
          $this->request->session()->write('connected_id',$joueur['id']);
          $this->request->session()->read('connected_id');
          $this->request->session()->check('connected_id'); 
        }
        else{
            $message="Identifiants incorrects";
        }
        }
        $this->set('message',$message);
      }

      public function newlogin()
      {
        // Creation nouveau  joueur
        $this->loadModel('Players');
        $this->set('player_id', $this->request->session()->read('Players.id'));
        $player = $this->Players->newEntity();

        if ($this->request->is('post')) {
          $player = $this->Players->patchEntity($player, $this->request->data);
          if ($this->Players->save($player)) {
            $message="Nouveau compte crée";
          }
          else{
            $message="Impossible de créer un compte";
        }
        $this->set('message',$message);
      }
    }

    public function newfighter()
    {
      // Creation nouveau combatant
      $this->loadModel('Fighters');
      //$this->loadModel('Players');
      //$player_id= $this->Players->player_id;
      $this->set('fighter_id', $this->request->session()->read('Fighters.id'));
      $fighter = $this->Fighters->newEntity();

      if ($this->request->is('post')) {
        $fighter = $this->Fighters->patchEntity($fighter, $this->request->data);
        if ($this->Fighters->save($fighter)) {
          $message="Nouveau combatant crée";
        }
        else{
          $message="Impossible de créer un nouveau combatant";
      }
      $this->set('message', $message);
    }
    }

    public function newGuilde()
    {
    // Creation d'un nouvelle Guilde
    $messageGuilde="Pas de guilde crée";
    $this->loadModel('Guilds');
    $this->set('id', $this->request->session()->read('Guilds.id'));
    $guild = $this->Guilds->newEntity();

    if ($this->request->is('post')) {
      $guild = $this->Guilds->patchEntity($guild, $this->request->data);
      if ($this->Guilds->save($guild)) {
        $messageGuilde="Nouvelle guilde crée";
      }
      else{
        $messageGuilde="Impossible de créer une nouvelle Guilde";
    }
  }
  $this->set('messageGuilde', $messageGuilde);
  }

    public function fighter(){
      //Afficher le meilleur combatant
      $this->loadModel('Fighters');
      //$combatantMax = $this -> Fighters -> getBestFighter();
      //$this->set('aaa', $combatantMax);

      //Affichage des données du combatant
      //$infoNom = $this-> Fighters -> infosName();
      //$this->set('NomCombatant', $infoNom);
    }

    public function sight()
    {

    }
       
    public function diary()
    {
        /* Test affichage events de la base de données */
        /* $this -> loadModel('Events');
        $lastEvents = $this -> Events -> displayEvents();
        $this -> set('lastEventsDisplay', $lastEvents); */
                
        $this->request->session()->read('connected_id');
        $this->request->session()->check('connected_id');
        
        //if ($id_connected != null) {

            $test = "azerty";
            $this->set('test',$test);
        
        //}
        
        }

    }
  
