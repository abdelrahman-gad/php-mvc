<?php 
/**
 * Controller class holds most of the app lgic 
 */
class Controller extends Application{
 protected $_controller,$_action;
 public $view;
 public function __construct($controller,$action){
   parent::__construct();
   $this->_controller=$controller;
   $this->_action=$action;
   $this->view=new View();
 }
 /**
  * create model object from 
  * 
  *  */
  protected function load_model($model){
    if(class_exists($model)){
      $this->{$model.'Model'}=new $model(strtolower($model));
    }
     
  }

}
