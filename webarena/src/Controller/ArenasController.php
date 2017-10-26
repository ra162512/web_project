<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\Time;

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
      $id_user = $this->Auth->user('id');
      
      if ($this->request->is('post')) {
        $fighter = $this->Fighters->patchEntity($fighter, $this->request->data);
        $fighter->player_id=$id_user;
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

        $this->Auth->allow(['add', 'logout', 'fighter', 'diary','connection','afficherpassword']); // permet de mettre de faire en sorte que les elements auth laisse publique dans add et logout

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
    public function message(){
        
         $this->loadModel('Fighters');
          $id_envoyeur = $this->Auth->user('id');
    //   
        $list=$this->Fighters->getallFighterssender($id_envoyeur);
        $list1=$this->Fighters->getallFightersreceiver1($id_envoyeur);
      
        $this->set('list',$list);
        $this->set('list1',$list1);

        
        $this->loadModel('Messages');
       $message = $this->Messages->newEntity();
       $message2="voulez vous envoyer un message?";
      if ($this->request->is('post')) 
           {
          $indicetableau_joueur=$this->request->getData('namefrom');
          $indicetableau_joueur1=$this->request->getData('namedest');
          $elem1=$list[$indicetableau_joueur];
          $elem2=$list1[$indicetableau_joueur1];
         $elem3=$this->request->getData('message');
         $elem4=$this->request->getData('titre');
            
           
            $id_sender=$this->Fighters->find_id($elem1);
             $id_receive=$this->Fighters->find_id($elem2);
            $message->fighter_id_from=$id_sender;
            $message->fighter_id=$id_receive;
            $message->message=$elem3;
            $message->title=$elem4;
            $time = Time::now();
            $message->date=$time;
       
            if ($this->Messages->save($message)) {
                    $message2="message envoyé! voulez vous en envoyer un autre?";
                   
                    }
        
      
        }
            $this->set('elem1',$message2);
            }
            
            
            
            
            
            
            
     public function liremessage(){
         $listmessages=null;
         $listnom=null;
         $this->loadModel('Fighters');
          $id_envoyeur = $this->Auth->user('id');
             $list3=$this->Fighters->getallFighterssender($id_envoyeur);
        $list4=$this->Fighters->getallFightersreceiver1($id_envoyeur);
                 $this->set('list3',$list3);
                 $this->set('list4',$list4);
                 
               $this->loadModel('Messages');
               
            if ($this->request->is('post')) 
            
             {
                
         $indice=$this->request->getData('namefrom');
         $indice2=$this->request->getData('namewith');
         $nom_recupere=$list3[$indice];
         $nom_recupere2=$list4[$indice2];
          $this->set('hey',$nom_recupere);
         $id_fighter=$this->Fighters->find_id($nom_recupere);
         $id_fighter2=$this->Fighters->find_id($nom_recupere2);
        $listmessages=$this->Messages->recuperermessages($id_fighter,$id_fighter2);
        $listnom=$this->Fighters->recuperernom($listmessages[1]);
      
           }
             $this->set('listmessages',$listmessages);
        $this->set('listnom',$listnom);
     }
     
        }      
                    
             
     
    

