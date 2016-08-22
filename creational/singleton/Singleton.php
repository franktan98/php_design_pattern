<?php
namespace SimpleLibrary;

use \PDO;

class Simple_PDO
{
    // Hold an instance of the class
    private static $instance;
    private static $connection_handler ;
    private static $connection_name ; 
    
    private function init_class(){
        // class initial
    }
    
    private function __construct($source_system,$source_host,$source_port,
            $source_database_name,$source_user,$source_password) {
        $this->add_connection($source_system,$source_host,$source_port,
            $source_database_name,$source_user,$source_password); 
    }
    
    private static function add_connection($source_system,$source_host,$source_port,
            $source_database_name,$source_user,$source_password){
        self::$connection_name[] = $source_database_name ;
        self::$connection_handler[$source_database_name]['system']=$source_system ;
        self::$connection_handler[$source_database_name]['host']=$source_host ;
        self::$connection_handler[$source_database_name]['port']=$source_port ;
        self::$connection_handler[$source_database_name]['database_name']=$source_database_name ;
        self::$connection_handler[$source_database_name]['user']=$source_user ;
        self::$connection_handler[$source_database_name]['password']=$source_password;
        self::$connection_handler[$source_database_name]['handler']=null;
    }
    
    private static function connecting_database( $source_database_name ){
        $return_value = false;
        $port_string='';
        if ( is_null(self::$connection_handler[$source_database_name]['handler']) ){
            is_null(self::$connection_handler[$source_database_name]['port'])
            ? $port_string=''
            : $port_string = ';port='.self::$connection_handler[$source_database_name]['port'] ;
    
            $connection_string = self::$connection_handler[$source_database_name]['system'].':host='.
                self::$connection_handler[$source_database_name]['host'].';dbname='.
                self::$connection_handler[$source_database_name]['database_name'].$port_string;
                
            try {
                self::$connection_handler[$source_database_name]['handler'] 
                    = new PDO($connection_string
                              , self::$connection_handler[$source_database_name]['user']
                              , self::$connection_handler[$source_database_name]['password']);
                //echo '<br />'. $source_database_name .' database connection now is ready ';
                    
                $return_value = true;
            } catch (PDOException $ex) {
                $error_message_g = $ex->getMessage();
                $return_value = false;
            }
            return $return_value ;
        }
    }
    
    // The singleton method
    public static function singleton($source_system,$source_host,$source_port,
            $source_database_name,$source_user,$source_password)
    {
        if (!isset(self::$instance)) {
            self::$connection_name = array() ;         
            self::$instance = new Simple_PDO($source_system,$source_host,$source_port,
            $source_database_name,$source_user,$source_password);
        }else{
            in_array( $source_database_name,self::$connection_name)
                ? null 
                : self::add_connection($source_system, $source_host, $source_port, 
                        $source_database_name, $source_user, $source_password); 
        }
        return self::$instance;
    }
    
    public function terminate_connection($source_database_name){
        if ( in_array( $source_database_name , self::$connection_name)){
            //unset(self::$connection_name[$source_database_name]);
            self::$connection_handler[$source_database_name]['handler'] = null;
            //echo '<br />'. $source_database_name .' now is null';
        }
    }
    
    public function execute_query($source_database_name , $source_sql , $source_parameter ){
        try {
            is_null(self::$connection_handler[$source_database_name]['handler'])
                ? self::connecting_database($source_database_name)
                : null ;
            self::$connection_handler[$source_database_name]['handler']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = self::$connection_handler[$source_database_name]['handler']->prepare($source_sql);
            $statement->execute($source_parameter);
            
            $return_result = $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $ex) {
            $error_message_g = $ex->getMessage();
            $return_result = null;
        }
        return $return_result; 
    }
    
    public function execute($source_database_name , $source_sql , $source_parameter) {
        $return_result = 0;
        try {
            is_null(self::$connection_handler[$source_database_name]['handler'])
                ? self::connecting_database($source_database_name)
                : null ;
            self::$connection_handler[$source_database_name]['handler']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $statement = self::$connection_handler[$source_database_name]['handler']->prepare($source_sql);
            $statement->execute($source_parameter);
            
            $return_result = $statement->rowCount();
        } catch (PDOException $ex) {
            $this->error_message_g = $ex->getMessage();
            $return_result = 0;
        }
        return $return_result;
    }
}

$temp = Simple_PDO::singleton('mysql','localhost',null,'shop','aaaa','aaaa');
echo var_dump($temp->execute_query('shop','SELECT * FROM product',null) );


?>