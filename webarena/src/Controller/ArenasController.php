<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

/**
* Personal Controller
* User personal interface
*
*/
class ArenasController  extends AppController
{
    



public function signup(){
 
}   


public function fighter(){}
public function sight(){}
public function diary(){}

public function accueil(){}



     public function index()
     {
         $this->loadModel('Users');
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id)
    {
        $this->loadModel('Users');
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add() //Pour ajouter un utlisateur
    {
        $this->loadModel('Users');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__("L'utilisateur a été sauvegardé."));
                return $this->redirect(['action' => 'accueil']);
            }
            $this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
        }
        $this->set('user', $user);
    }

   public function beforeFilter(Event $event)  // permet de configurer l'authentification.
    {
      
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout']); // permet de mettre de faire en sorte que les elements auth laisse publique dans add et logout
    }

    public function login() //pour se connecter
    {
         $this->loadModel('Users');
     //  $message="vous n'ètes pas co";
     //   $this->set('message',$message);
       if ($this->request->is('post')) {    // verifie que la requète utilise bien un post
          $user = $this->Auth->identify(); //identifie l'utilisateur et renvoie  1 s'il a été identifié
          
          if ($user) {  
       //        $message="Vous êtes bien connecté";
       //         $this->set('message',$message);
                $this->Auth->setUser($user);    //pour connecter l’utilisateur et sauvegarder les infos de l’utilisateur dans la session 
                return $this->redirect($this->Auth->redirectUrl());  // redirige vers une url
                
            }
           $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
 
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    


} 
