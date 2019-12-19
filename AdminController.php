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
        public function products()
        {
            $this->layout='adminLayout';
            $items=$this->Items->find("all");
            $this->set("Title","Book List");
            $this->set("items",$items);
        }
        public function edit()
        {

        }
        public function delete()
        {
            
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
            //    echo "right";
            }
            else
            {
                echo "Incorrect Email or Password";
             //  $this->Flash->set('Invaid Email Or Password',['element'=>'success']);
            //  $this->redirect(["action"=>"index"]);
            }
        }
    }
?> 
