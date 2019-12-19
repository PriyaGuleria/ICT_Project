<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\DataSource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;



    class UserController extends AppController{
        private $connection;
        public function initialize()
        {
            $this->loadComponent('Csrf');

            parent::initialize();
            $this->connection=ConnectionManager::get('default');
            $this->table=TableRegistry::get('users');
            $this->loadModel("Users");

            $this->loadModel("Contacts");
            $this->table=TableRegistry::get('contacts');

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
        public function about()
        {
            $this->layout='mylayout';
        }
        public function contact()
        {
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
        public function savecontacts()
        {
            $this->autoRender=false;
            $contacts=$this->Contacts->newEntity($this->request->data);
            $form_data=$this->request->data;
            $contacts->guestname=$form_data['guestname'];
            $contacts->guestmessage=$form_data['guestmessage'];
            $contacts->guestcontact=$form_data['guestcontact'];
            $contacts->guestemail=$form_data['guestemail'];

            $this->Contacts->save($contacts);
            $this->Flash->set('Your Message has submitted',['element'=>'success']);
            $this->redirect(["action"=>"contact"]);
        }
        public function login()
        {
            $this->autoRender=false;
            $form_data=$this->request->data;
            $email=$form_data['email'];
            $password=$form_data['password'];
            $email;
            $password;
           $users = $this->Users->find('all', array('conditions'=>array('email'=>$email,'password'=>base64_encode($password))));                  
            foreach($users as $key=>$user){
                $sm= $user->firstname;
                '</br>';
            }
            if($sm!='')
            {
                  $this->Flash->set('Successful!!, Authorized User',['element'=>'success']);
                  $this->redirect(["action"=>"signup"]);
            }
            else
            {
               //$this->Flash->set('Invaid Email Or Password',['element'=>'success']);
                $this->redirect(["action"=>"signup"]);
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