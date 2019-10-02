<?php
namespace App\Controller;
use App\Controller\AppController;

class TestController extends AppController{

    public function index(){
        //$this->autoRender=false;
        $UserProfile=array("first name"=>"happy",
                         "last name"=>"christian",
                        "address"=>"borsad",
                        "contact no"=>"7359508036",
                        "gender"=>"Male"
);
        $name="Happy";
        $this->set(compact("UserProfile"));
        $this->set(compact("name"));
        $this->set("title","Uniwise");
    }
    public function login()
    {
      //  $this->autoRender=false;
       // echo "hello";
    }


}
?>
