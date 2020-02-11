<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\DataSource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

    class AdminController extends AppController{
        private $connection;
        public function initialize()
        {
            parent::initialize();
            $this->connection=ConnectionManager::get('default');
            $this->table=TableRegistry::get('admin');
            $this->table=TableRegistry::get('items');
            $this->loadModel("Admin");
            $this->loadModel("Items");
            $this->loadModel("Contacts");
            $this->loadModel("Checkout");
            $this->loadModel("Suggestions");
            $this->table=TableRegistry::get('contacts');
            $this->table=TableRegistry::get('checkout');
            $this->table=TableRegistry::get('suggestions');
            $this->table=TableRegistry::get('users');
            $this->loadModel("Users");
        }
        public function index(){
            $this->layout='adminlayout1';
        }
        public function dashboard()
        {
            $this->layout='adminlayout';
        } 
        public function addp()
        {
            $this->layout='adminlayout';
        }
        public function customers()
        {
            $this->layout='adminlayout';
            $users=$this->Users->find("all");
            $this->set("Users","Book List");
            $this->set("users",$users);
        }
        public function products()
        {
            $this->layout='adminlayout';
            $items=$this->Items->find("all");
            $this->set("Title","Book List");
            $this->set("items",$items);
        }
        public function contacts()
        {
            $this->layout='adminlayout';
            $contacts=$this->Contacts->find("all");
            $this->set("Title","Book List");
            $this->set("contacts",$contacts);
        }
        public function details()
        {
            $id = $this->request->query('id'); 
            $users = $this->Users->find('all', array(
            'conditions'=>array('Users.userid =' => $id)));
            $this->set("users",$users);
            $this->layout='adminlayout';
        }
        public function delete(){
            $id = $this->request->query('id'); 
            $users_table = TableRegistry::get('users');
            $users = $users_table->get($id);
            $users_table->delete($users);
            echo "User deleted successfully.";
            $this->setAction('customers');
         }
        public function suggestions()
        {
            $this->layout='adminlayout';
            $suggestions=$this->Suggestions->find("all");
            $this->set("Title","Book List");
            $this->set("suggestions",$suggestions);
        }
        public function transactions()
        {
            $this->layout='adminlayout';
            $checkout=$this->Checkout->find("all");
            $this->set("Title","Book List");
            $this->set("checkout",$checkout);
        }
        public function edit()
        {
            // $this->load->view('1');
        }
        public function insprod()
        {
            $this->autoRender=false;
            $uploaded_path="img/uploads";
            $tmp_name=$this->request->data['file']['tmp_name'];
            $image_name=$this->request->data['file']['name'];
            if(move_uploaded_file("$tmp_name",WWW_ROOT.$uploaded_path."/".$image_name)){
                $items=$this->Items->newEntity($this->request->data);
                $form_data=$this->request->data;
                $items->itemname=$form_data['product_name'];
                $items->itemprice=$form_data['product_price'];
                $items->itemdescription=$form_data['product_description'];
                $items->itemwarranty=$form_data['product_warrenty'];
                $items->itemcategory=$form_data['product_category'];
                $items->itemimage=$uploaded_path."/".$image_name;
                $this->Items->save($items);
                $this->Flash->set('New Item Information Uploaded',['element'=>'success']);
                $this->redirect(["action"=>"dashboard"]);
            }
            else{
                echo "file error";
            }

          echo "<script type='text/javascript'>
               alert('You Are Registered With Uniwise');
          </script>";

        }
        public function login()
        {
            $this->autoRender=false;
            $form_data=$this->request->data;
            $adminemail=$form_data['adminemail'];
            $adminpassword=$form_data['adminpassword'];
            $adminemail;
            $adminpassword;
            $admins = $this->Admin->find('all', array('conditions'=>array('adminemail'=>$adminemail,'adminpassword'=>$adminpassword)));                  
            foreach($admins as $key=>$admin){
                $sm= $admin->adminname;
                '</br>';
            }

            if($sm!='')
            {
                  $this->Flash->set('Welcome Back!! Uniwise Admin',['element'=>'success']);
                  $this->redirect(["action"=>"dashboard"]);

            }
            else
            {
                echo "Incorrect Email or Password";

            }
        }
    }
?> 