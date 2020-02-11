<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\DataSource\ConnectionManager;
use Cake\ORM\TableRegistry;

class BookController extends AppController{
    public function initialize()
    {
        $this->loadComponent('Csrf');
        $this->loadModel("Books");
        parent::initialize();
        $this->viewBuilder()->layout("booklayout");
    }
    public function index()
    {
        //Book List
        $books=$this->Books->find("all",[
            "order"=>["id"=>"desc"]
        ]);
        $this->set("Title","Book List");
        $this->set("books",$books);
    }
    public function create()
    {
        //create page
        $this->set("Title","Book Create");

    }
    public function save()
    {
        $this->autoRender=false;
    
        $book=$this->Books->newEntity($this->request->data);
        $form_data=$this->request->data;
        $book->name=$form_data['name'];
        $book->email=$form_data['email'];
        $book->author=$form_data['author'];
        $book->description=$form_data['description'];
        $this->Books->save($book);
      //  $this->redirect(["action"=>"index"]);
     $this->Flash->set("Book has added succesfully",["element"=>"book_success"]);


    }
    public function h1()
    {
        echo "hello";
    }
  
    public function edit($id)
    {
        //open edit page
        $this->set("Title","Book Edit");
    }
    public function update()
    {
        $this->set("Title","Book Update");
    }
  
}


   

?> 