<?php
class Router{
   /**
    * extract the name of Controller,action,url parameters 
    * @param [Array][$url][array holds extrated values from the url]
    */

    public static function route($url) {
        /**
         * @summary controller 
         * @description extract the name of the controller from $url array
         * if not (there is no controller name) make the controller is the default controller
         */
        $controller=(isset($url[0]) && $url[0]!='' )?ucwords($url[0]):DEFAULT_CONTROLLER;
        $controller_name=$controller;
        //afetr extracting the first element[controller] remove it from the array
        array_shift($url);

        /**
         * action [method inside the class]
         * 
         *  */ 
        $action=(isset($url[0]) && $url[0]!='' )?$url[0].'Action':'indexAction';
        $action_name=$action;
        
        array_shift($url);

        /**
         * the last elements of the $url array is the parameters of the query
         *  */
        $queryParams=$url;
        /**
         * note the name of the controller and action changes depending on the $url
         * so a better way is to call the controller object and its variables dynamically
         * 
         *    
         * 
         */
        $dispatch=new $controller($controller_name,$action);
        if(method_exists($controller,$action)){
           call_user_func_array([$dispatch,$action],$queryParams);
        }else{
            die('that metod does not exist in the controller \"'.$controller_name.'\"');
        }

    }

   public static function redirect($location){
       if(!headers_sent()){
           header('Location :'.PROOT.$location);
           exit();
       }else{
           echo '<script type="text/javascript">';
           echo 'window.location.href="'.PROOT.$location.'";';
           echo '</script>';
           echo '<noscript>';
           echo '<meta http-equiv="refresh" content="0;url='.$location.'"/>';
           echo '</noscript>';exit();
       }
   }

}

