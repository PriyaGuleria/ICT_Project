<?php
namespace App\Controller;
use App\Controller\AppController;

    class UserController extends AppController{
        public function index(){
             $this->layout='mylayout';
        }
        public function shop(){
            $this->layout='mylayout';
        }
    }

?>
