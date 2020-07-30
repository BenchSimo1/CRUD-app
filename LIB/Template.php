<?php 

class Template {

    public $template;
    public $vars = array() ;

    public function __construct($path) {
        $this->template = $path ;
    }

    public function __get($key) {return $this->vars[$key] ;}
    public function __set($key , $value ) { $this->vars[$key] = $value ;}

    public function __toString() {
        extract($this->vars) ;
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template) ;
        
        return ob_get_clean();
    }
}