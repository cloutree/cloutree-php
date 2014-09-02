<?

namespace Cloutree;

class Client {

  // Singleton instance
  private static $instance; 

  private $app_key;
  private $app_secret;
  public $result;

  // private constructor function 
  // to prevent external instantiation 
  private __construct() { }


  // getInstance method
  public static function getInstance(){
    if(!self::$instance) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  // class method to pass to singleton
  public static function configure(array) {
    return getInstance->configure(array);
  }

  // class method to upload files
  public static function upload(filename) {
    return getInstance->upload(filpath);
  }

  // class method to get result
  public static function result() {
    return getInstance->result;
  }

  private function configure(array) {
    $this->app_key = array["app_key"];
    $this->app_secret = array["app_secret"];
  }

  private function upload(filename) {
    
  }

}