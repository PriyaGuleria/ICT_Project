<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\DataSource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;



    class UsersController extends AppController{
        private $connection;
        public function initialize()
        {
            parent::initialize();
            $this->connection=ConnectionManager::get('default');
            $this->table=TableRegistry::get('users');
            $this->loadModel("Users");
        }
        public function beforeFilter(Event $event)
        {
            parent::beforeFilter($event);
            // Allow users to register and logout.
            // You should not add the "login" action to allow list. Doing so would
            // cause problems with normal functioning of AuthComponent.
            $this->Auth->allow(['add', 'logout']);
        }
    
        public function index(){
             $this->layout='mylayout';
        }
        public function shop(){
            $this->layout='mylayout';
        }
        public function signup(){
            $this->layout='mylayout';
        }
        public function save()
        {
            $this->autoRender=false;
        
            $users=$this->Users->newEntity($this->request->data);
            $form_data=$this->request->data;
            $users->firstname=$form_data['firstname'];
            $users->lastname=$form_data['lastname'];
            $users->contact=$form_data['contact'];
            $users->address=$form_data['address'];
            $users->birthdate=$form_data['birthdate'];
            $users->gender=$form_data['gender'];
            $users->email=$form_data['email'];
            $users->password=base64_encode($form_data['password']);

            $this->Users->save($users);
            $this->Flash->set('You Are Now Registered With Uniwise',['element'=>'success']);
            $this->redirect(["action"=>"signup"]);

          // $this->redirect(["action"=>"index"]);
          // $this->Flash->set("You Are Registered With Uniwise",["element"=>"book_success"]);
          // $this->Session->setFlash($message,'flash',array('alert'=>'info'));
          echo "<script type='text/javascript'>
          alert('You Are Registered With Uniwise');
      </script>";
         // $this->redirect(["action"=>"index"]);
        
    
        }
        public function login()
        {
            $this->autoRender=false;
            if ($this->request->is('post')) {
                $user = $this->Auth->identify();
                if ($user) {
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                }
                $this->Flash->error(__('Invalid username or password, try again'));
            }
        }
     
        public function insertdata()
        {
             $UserFirstName=$
            // $UserLastName
            // $UserContact
            // $UserAddress
            // $UserBdate
            // $UserGender
            // $UserEmail
            // $UserPassword
            $this->connection->insert("users",[
                "UserFirstName"=>"ABC",
                "UserLastName"=>"XYZ",
                "UserContact"=>"9898989898",
                "UserAddress"=>"asasdas",
                "UserBdate"=>"01-01-1999",
                "UserGender"=>"M",
                "UserEmail"=>"abc@gmai.com",
                "UserPassword"=>"abc123"
            ]);

        }
        public function tabledata()
        {
            $this->autoRender=false;
            $tableIns=$this->Table->newEntity();
            $tableIns->UserFirstName="Happy";
            $tableIns->UserLastName="Chr";
            $this->table->save($tableIns);
        }
    }

?> 