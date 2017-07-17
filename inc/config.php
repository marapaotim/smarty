<?php
require_once('/var/www/libs/smarty/Smarty.class.php');
class Config{
	private $config;  
	private $smartyTemp;

	private $dbHost;
    private $dbUsername;
    private $dbPassword;
    private $dbName;

	function __construct()
 	{
		$this->config = array();  
		$this->smartyTemp = new Smarty();

		$this->dbHost = 'localhost';
		$this->dbUsername = 'root';
		$this->dbPassword = 'GHoA1mhxX6ql';
		$this->dbName = 'guestbook';
 	}

 	public function dataConfig(){
		$this->config['BASE_DIR'] = '/var/www/guestbook-tim/';  
		$this->config['BASE_URL'] = 'http://guestbook-tim.linuxserv.space'; 
		$this->smartyTemp->template_dir = $this->config['BASE_DIR'] . '/tpl';
		$this->smartyTemp->compile_dir  = $this->config['BASE_DIR'] . '/tpl_c';
		$this->smartyTemp->setCacheDir($this->config['BASE_DIR'].'/cache');
		$this->smartyTemp->caching = 0;
		$this->smartyTemp->force_compile = true;   
		return $this->smartyTemp;
 	}

 	public function dBase(){
 		$conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
 	}
}


?>