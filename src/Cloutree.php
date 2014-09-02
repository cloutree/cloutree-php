<?php

namespace Cloutree;

class Client {

  // Singleton instance
  private static $instance; 

  private $app_key;
  private $app_secret;
  public $result;

  // private constructor function 
  // to prevent external instantiation 
  private function __construct() { }


  // getInstance method
  public static function getInstance(){
    if(!self::$instance) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  // class method to pass to singleton
  public static function configure( $params ) {
    self::getInstance()->configure( $params );
  }

  // class method to upload files
  public static function upload($filename) {
    self::getInstance()->upload($filpath);
  }

  // class method to get result
  public static function result() {
    self::getInstance()->result;
  }

  private function configure($params) {
    $this->app_key = $params["app_key"];
    $this->app_secret = $params["app_secret"];
  }

  private function upload(filename) {

  }

}