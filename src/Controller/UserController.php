<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\DataSource\ConnectionManager;
use Cake\ORM\TableRegistry;



    class UserController extends AppController{
        private $connection;
        public function initialize()
        {
            parent::initialize();
            $this->connection=ConnectionManager::get('default');
            $this->table=TableRegistry::get('users');
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