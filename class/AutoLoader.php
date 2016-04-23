<?php
/**
 *
 */
class AutoLoader
{
  
  static function Register(){

    spl_autoload_register(array(__CLASS__, 'AutoLoad'));
  }


  static function AutoLoad($class_name){
    require 'class/' . $class_name . '.php';
  }


}
