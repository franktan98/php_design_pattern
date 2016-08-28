<?php
/*
 * This file contain View class
 */
/**
 * Description of View class
 * this class will help to call related page template. and display it with data we provide
 * act as a web page display manager
 * 
 * @author frank
 */
class View{
    protected $header;
    protected $footer;
    private $page_title;
    private $page_contain;
    private $page_template_request ; 
    private $temp_cert_check ; 
    
    private function init_class(){  
        // initial of class
        $this->header = '' ;
        $this->footer = '' ;
        $this->temp_cert_check = null ;
        $this->page_template_request = true ; 
        $curent_datetime = date("Y-m-d H:i:s");
        $this->header = <<<EOD
<!DOCTYPE html>
<html>
    <head><title>Default $curent_datetime </title></head>
    <body>
EOD;
        $this->footer = <<<EOD
    </body>
</html>
EOD;
    }
    
    public function __construct() {
        // class construct
        $this->init_class();
    }
    
    public function index(){
    }
    
    public function show_page( $source_page_name , $source_parameter = null){
        // show page given with parameter given
        $return_value = '' ; 
        $header_show = '' ;
        $footer_show = '' ; 
        if ($this->page_template_request ){
            $header_show = $this->header ;
            $footer_show = $this->footer ;
        }
        // loading header
        $return_value = $return_value . $header_show;
        // loading contain
        $url_execute = $source_page_name;
        $parameter = $source_parameter ; 
        $return_value = $return_value . $this->load_page($url_execute , $parameter );
        // loading footer
        $return_value = $return_value ."\r\n". $footer_show;
        
        return $return_value;
    }
    
    private function load_page($source_url, array $source_parameter = null){
        //loading page
        is_null($source_parameter)?$source_parameter = array() : null ; 
        ob_start();
        foreach($source_parameter as $key => $value ){
            $$key = $value ;
        }
        require $source_url ; 
        $return_value = ob_get_clean();
        return $return_value;
    }
    
    public function use_template($template_request){
        // setting to use template or not to use 
        $this->page_template_request = $template_request ;
    }
    
    public function set_page_title($source_title='Default'){
        // set page title
        $this->page_title = $source_title ;
    }
    
    public function set_header($source_header=''){
        // set header
        if ( strlen($source_header) >= 1 ){
            $this->header = $source_header ; 
        }
    }
    
    public function set_footer($source_footer =''){
        // set footer
        if ( strlen( $source_footer ) >= 1 ){
            $this->footer = $source_footer ;
        }
    }
}