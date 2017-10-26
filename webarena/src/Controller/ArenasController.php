<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Personal Controller
 * User personal interface
 *
 */
class ArenasController extends AppController {

    public function signup() {
        
    }

    public function fighter() {
        
    }

    public function sight() {
        
    }

    public function diary() {
        
    }

    public function accueil() {
        
    }
    
    public function connection(){
        
    }
    
    public function arena(){
        $arene = array();
        $this->loadModel('Surroundings');
        $arena = $this->Surroundings->allCases();
        $this->set('arene',$arena);   
    }
    
public function createfighter()
    {
      // Creation nouveau combatant
      $this->loadModel('Fighters');
      $player_id= $this->Auth->user('id');
      $this->set('player_id', $this->Auth->user('id'));
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
     public function afficherpassword() {
          
          if($this->request->is('post')){
      
                $data= $this->request->data;
                $this->loadModel('Players');
               
                
                if($joueur=$this->Players->find('all')->where(['Players.email' => $data['email']]))
                {
                    
                    $joueur = $joueur->first();
                $password= $joueur ->password;
                
                }else{$password="mail non connu"; }
          }
          $this->set('password', $password);
          
      }

    
    public function index() {
        $this->loadModel('Players');
        $this->set('players', $this->Players->find('all'));
    }

    public function view($id) {
        $this->loadModel('Players');
        $player = $this->Players->get($id);
        $this->set(compact('players'));
    }

    public function add() { //Pour ajouter un utlisateur
        $this->loadModel('Players');
        $player = $this->Players->newEntity();
        if ($this->request->is('post')) {
            $player = $this->Players->patchEntity($player, $this->request->getData());
            if ($this->Players->save($player)) {
                $this->Flash->success(__("L'utilisateur a été sauvegardé."));
                return $this->redirect(['action' => 'accueil']);
            }
            $this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
        }
        $this->set('player', $player);
    }

    public function beforeFilter(Event $event) {  // permet de configurer l'authentification.
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout', 'fighter', 'diary','connection']); // permet de mettre de faire en sorte que les elements auth laisse publique dans add et logout
    }

    public function login() { //pour se connecter
        $this->loadModel('Players');
     
       
        if ($this->request->is('post')) {    // verifie que la requète utilise bien un post
            $player = $this->Auth->identify(); //identifie l'utilisateur et renvoie  1 s'il a été identifié
           

            if ($player) {
            
                $this->Auth->setUser($player);    //pour connecter l’utilisateur et sauvegarder les infos de l’utilisateur dans la session 
                return $this->redirect($this->Auth->redirectUrl());  // redirige vers une url
            } else
                $this->Flash->error(__('Invalid email or password, try again'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
    
    
}
