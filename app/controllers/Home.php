<?php 
class Home  extends Controller{

    public function __construct($controller,$action){
      parent::__construct($controller,$action);
    }
    public function indexAction(){
      $db=DB::getInstance();
     
       
       $this->view->render('home/index');
    }
    


}