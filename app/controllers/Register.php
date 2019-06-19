<?php 

class Register extends Controller{
  public function __construct($controller,$action){
   parent::__construct($controller,$action);
   
   /**
    *instantiate an object from the model
    * then the model deals with DB class which deals with the  database
    * Controller->Model->DB->Database engine
    */
   $this->load_model('Users');

   $this->view->setLayout('default');
  }

  public function loginAction(){

     
      if($_POST){
          //form validation 

          $validation=true;
          if($validation===true){
            $user=  $this->UsersModel->findByUsername($_POST['username']);
            if($user && password_verify(Input::get('remember_me'),$user->password)){
              $remember=isset($_POST['remember_me']) && Input::get('remember_me') ? true : false;
              $user->login($remember);
              Router::redirect('');
            }
          }
      } 
       $this->view->render('register/login');
  }
  public function registerAction(){
     
  }
}
