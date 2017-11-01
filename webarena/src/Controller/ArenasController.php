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
    public function nouvelleguilde()
    {
    // Creation d'un nouvelle Guilde
    $messG="Guilde non crée";
    $this->loadModel('Guilds');
    $guild = $this->Guilds->newEntity();

    if ($this->request->is('post')) {
      $guild = $this->Guilds->patchEntity($guild, $this->request->data);
      if ($this->Guilds->save($guild)) {
        $messG="Guilde crée avec succès";
      }
      else{
        $messG="Impossible de créer une nouvelle Guilde";
    }
    }
  $this->set('messG', $messG);
  }
    public function Avatar(){      
            $this->loadModel('Fighters');
            $session = $this->request->session();
            $myid=$session->read('Auth.User.id');
            $this->set('particularRecord', 'uploadAvatar'); //Setting View Variable
            $list=$this->Fighters->getallFighterssender($myid);
            $this->set('list',$list);
               
		if ($this->request->is('post')) { 
                    $choix= $this->request->getData('choix');  
                    
                      if($choix==1){
                                 $test=1;
		                 $indicetableau_joueur=$this->request->getData('namefighter');
                                 $elem1=$list[$indicetableau_joueur];
                                 $fighter_id=$this->Fighters->find_id($elem1);
                                 $this->set('fighter_name',$elem1);
                                 $sight=$this->Fighters->find_sight($elem1);
                                 $strength=$this->Fighters->find_strength($elem1);
                                 $health=$this->Fighters->find_health($elem1);
                                 $xp=$this->Fighters->find_xp($elem1);
                                 $level=$this->Fighters->find_level($elem1);
                                 $this->set('fighter_sight', $sight);
                                 $this->set('skill_strength', $strength);
                                 $this->set('skill_health', $health);
                                 $this->set('xp', $xp);
                                 $this->set('level', $level);
                                    }  
                      if($choix==2){  
			  if (!empty($this->request->data['upload']['name'])) {
				                                                                                          
                                 $file = $this->request->data['upload']; //put the data into a var for easy use
				 $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
				 $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions                 
				 if (in_array($ext, $arr_ext)) {
                                    move_uploaded_file($file['tmp_name'], WWW_ROOT . '/img/avatar/' . $fighter_id . '.jpg');                                                                                             
                                                                }
                                                                                }
                        
                     }	
                   
		}
                $this->set('mess',$test);
    }
    public function arena(){
        
          $mess="";
          $reussite=" "; 
        $this->loadModel('Surroundings');
        $this->loadModel('Fighters');
        $this->loadModel('Tools');
        $this->loadModel('Events');
        
        
        $player_id = $this->Auth->user('id');
 
          
        $position_courante=$this->Fighters->find_pos($player_id);
        $sight=$this->Fighters->recupererfightervision($player_id);
        $event=$this->Events->allEvents();
        $tools=$this->Tools->alltoolsTable();
        $fighters=$this->Fighters->getallfightersall();
        $surroundings = $this->Surroundings->allCases();
        $tableau_type_surround[10][15]=array();
        $tableauposition_surround[10][15]=array();
        $tableauposition_tools[10][15]=array();
        $tableauposition_fighters[10][15]=array();  
        
                 for($i=0;$i<10;$i++)
        {
             for($j=0;$j<15;$j++)
            { 
            $tableauposition_surround[$i][$j]=0;
             $tableau_type_surround[10][15]=" ";
              $tableauposition_fighters[$i][$j]=0;
            
            }
            
        }
        for($i=0;$i<count($surroundings);$i++)
                {   

                    $positionx_sur=$surroundings[$i]->coordinate_x;
                    $positiony_sur=$surroundings[$i]->coordinate_y; 
                    $tableauposition_surround[$positionx_sur-1][$positiony_sur-1]=1;
                    $tableau_type_surround[$positionx_sur-1][$positiony_sur-1]=$surroundings[$i]->type;
                }
                
        for($i=0;$i<count($fighters);$i++)
                {   

                    $positionx_fig=$fighters[$i]->coordinate_x;
                    $positiony_fig=$fighters[$i]->coordinate_y; 
                    $tableauposition_fighters[$positionx_fig-1][$positiony_fig-1]=1;
                    
                }
                
                 
        
         if($this->request->is('post')){
             $position=$this->Fighters->find_pos($player_id);
            $indice = $this->request->getData('direction');
        
            $indice=$this->request->getData('dep');
            
            if($indice<4){
            $mess = $this->Fighters->dplct($indice,$player_id,$tableauposition_surround,$tableauposition_fighters);
            }
            if($indice==4){
                
                $position=$this->Fighters->find_pos($player_id);
                $bonus=$this->Tools->recuperertool($position);
                $this->Fighters->attraper($player_id,$position,$bonus);
                $this->Tools-> effacertool($position);
                
            }
            if($indice==6){
                
                $position_advX=$position[0]+1;
                $position_advY=$position[1];
                $reussite=$this->Fighters->attaquer($player_id,$position_advX,$position_advY);
               
                } 
             if($indice==7){
               
                $position_advX=$position[0]-1;
                $position_advY=$position[1];
                 $reussite=$this->Fighters->attaquer($player_id,$position_advX,$position_advY);
              
                }
             if($indice==8){
              
                $position_advX=$position[0];
                $position_advY=$position[1]+1;
                 $reussite=$this->Fighters->attaquer($player_id,$position_advX,$position_advY);
             
                } 
            if($indice==9){
             
                $position_advX=$position[0];
                $position_advY=$position[1]-1;
                 $reussite=$this->Fighters->attaquer($player_id,$position_advX,$position_advY);
               
                } 
            }
            
            
         
        $position_courante=$this->Fighters->find_pos($player_id);
        $sight=$this->Fighters->recupererfightervision($player_id);
        $event=$this->Events->allEvents();
        $tools=$this->Tools->alltoolsTable();
        $fighters=$this->Fighters->getallfightersall();
        $surroundings = $this->Surroundings->allCases();
         
        for($i=0;$i<10;$i++)
        {
             for($j=0;$j<15;$j++)
            { 
            $tableauposition_surround[$i][$j]=0;
             $tableauposition_tools[$i][$j]=0;
              $tableauposition_fighters[$i][$j]=0;
            
            }
            
        }
        for($i=0;$i<count($surroundings);$i++)
                {   

                    $positionx_sur=$surroundings[$i]->coordinate_x;
                    $positiony_sur=$surroundings[$i]->coordinate_y; 
                    $tableauposition_surround[$positionx_sur-1][$positiony_sur-1]=1;
                    $tableau_type_surround[$positionx_sur-1][$positiony_sur-1]=$surroundings[$i]->type;
                }
                 for($i=0;$i<count($tools);$i++){

                  $positionx_tool=$tools[$i]->coordinate_x;
                    $positiony_tool=$tools[$i]->coordinate_y;
                    $tableauposition_tools[$positionx_tool-1][$positiony_tool-1]=1;
          
                
             }
              for($i=0;$i<count($fighters);$i++)
                {   

                    $positionx_fig=$fighters[$i]->coordinate_x;
                    $positiony_fig=$fighters[$i]->coordinate_y; 
                    $tableauposition_fighters[$positionx_fig-1][$positiony_fig-1]=1;
                    
                }
             
   
        $this->set('mess',$mess);
        $this->set('tab_pos_sur',$tableauposition_surround);
        $this->set('tab_type_sur', $tableau_type_surround);
        $this->set('tab_pos_tool',$tableauposition_tools);
        $this->set('tab_pos_fig',$tableauposition_fighters);
        $this->set('sight',$sight);
        $this->set('pos_cour',$position_courante);
        $this->set('sight',$sight);
        $arene=array($surroundings,$fighters,$tools,$event);
        $this->set('arene',$arene); 
         $this->set('reussite',$reussite);
         
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
        $this->loadModel('Players'); //relit le modèle au controller
        $player = $this->Players->newEntity(); // ajout d'un nouveau tuple dans la bdd
        if ($this->request->is('post')) {
            $player = $this->Players->patchEntity($player, $this->request->getData());
            if ($this->Players->save($player)) { // tuple inséré dans la bdd
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
        $choix=3;
         $listmessages=null;
         $listnom=null;
         $this->loadModel('Fighters');
          $id_envoyeur = $this->Auth->user('id');   
        $list=$this->Fighters->getallFighterssender($id_envoyeur);
        $list1=$this->Fighters->getallFightersreceiver1($id_envoyeur);
        $list3=$this->Fighters->getallFighterssender($id_envoyeur);
        $list4=$this->Fighters->getallFightersreceiver1($id_envoyeur);
        $this->set('list',$list);
        $this->set('list1',$list1);
        $this->set('list3',$list3);
        $this->set('list4',$list4);
        
        $this->loadModel('Messages');
       $message = $this->Messages->newEntity();
       $message2="voulez vous envoyer un message?";
       $message3="voulez vous envoyer un cri?";
      if ($this->request->is('post')) 
           {
          $choix= $this->request->getData('choix');
         
              
              
          
          if($choix==1)
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
          if($choix==2){
              
              $indice=$this->request->getData('namefrom');
         $indice2=$this->request->getData('namewith');
         $nom_recupere=$list3[$indice];
         $nom_recupere2=$list4[$indice2];
          $this->set('hey',$nom_recupere);
         $id_fighter=$this->Fighters->find_id($nom_recupere);
         $id_fighter2=$this->Fighters->find_id($nom_recupere2);
        $listmessages=$this->Messages->recuperermessages($id_fighter,$id_fighter2);
        $listnom=$this->Fighters->recuperernom($listmessages[1]);
        $this->set('listmessages',$listmessages);
        $this->set('listnom',$listnom);
          }
          
                    if($choix==2){
              
              $indice=$this->request->getData('namefrom');
         $indice2=$this->request->getData('namewith');
         $nom_recupere=$list3[$indice];
         $nom_recupere2=$list4[$indice2];
          $this->set('hey',$nom_recupere);
         $id_fighter=$this->Fighters->find_id($nom_recupere);
         $id_fighter2=$this->Fighters->find_id($nom_recupere2);
        $listmessages=$this->Messages->recuperermessages($id_fighter,$id_fighter2);
        $listnom=$this->Fighters->recuperernom($listmessages[1]);
        $this->set('listmessages',$listmessages);
        $this->set('listnom',$listnom);
          }
                    if($choix==3){
              
              $cri=$this->request->getData('cri');
              $this->loadModel('Events');
              //$this->Events->fairelecri();
              $event = $this->Events->newEntity();
              $event->name=$cri;
              $event->coordinate_x=0;
              $event->coordinate_y=0;
               $time = Time::now();
               $event->date=$time;
              if ($this->Events->save($event)) {
                    $message3="cri envoyé! voulez vous en envoyer un autre?";
                   
                    }             
          }
        
                    
        }
        
         $this->set('mess',$choix);
            $this->set('elem1',$message2);
            $this->set('elem8',$message3);
     
          

            
            
            
  }
            
            
       
     
        }      
                    
             
     
    


      
        
        
        
        
      
