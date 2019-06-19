<?php
/**
 * handles form inputs
 */
class Input{
  public static  function sanitize($dirty){
        return htmlentities($dirty,END_QUOTES,'UTF-8');
  }
  /**
   * takes input name [POST/GET] and then return its sanitzed value 
   * 
   */
  public static function get($input){
    if(isset($_POST[$input])){
        return self::sanitize($_GET[$input]);
    }elseif(isset($_GET[$input])){
        return self::sanitize($_GET[$input]);
  
    }
  }


}