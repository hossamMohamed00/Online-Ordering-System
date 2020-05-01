<?php
	
    require 'config.php';
    require 'Db_Control.php';
    require 'Products.php';

class person extends Db_Control
{   
    //set the table name
    protected $_table = 'users';	// This is the name of the table on DB

    private $Id;
    public  $Name;
    private $username;
    private $password;
    public $phone;
    public $address;
    public $usertype;

    /**
    * Constructor
	* Add array config to pass it to the constructor of the DB_Control class to initialize data for connection
    */
    public function __construct() 
    {
        // Add from config.php file
        global $config;

        // Call the parent constructor
    	parent::__construct($config);
    }

    public function setId($id)
    {
        $this->Id = $id;
    }
    public function getId()
    {
        return $this->Id;
    }

    public function setName($name)
    {
        $this->Name = $name;
    }
    public function getName()
    {
        return $this->Name;
    }

    public function setUserName($username)
    {
        $this->username = $username;
    }
    public function getuserName()
    {
        return $this->username;
    }
    
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getpassword()
    {
        return $this->password;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }

    public function setUserType($usertype)
    {
        $this->usertype = $usertype;
    }
    public function getUserType()
    {
        return $this->usertype;
    }

    /**
    *  Show one user
    *  @param int $user_Id 
    *  @return array Returns a row as  associative array
    */

    public function getUser($user_Id)
    {
        $this->select($this->_table , 'Id = '.$user_Id);

        return $this->fetch(); //func return one row 
    }

    /**
     * get User Data For Login
     * @param $username,$password to search in DB with it 
     * @return  array userData
     */
    public function getUserForLogin($username , $password)
    {
    	//call functio select and pass tableName and the where statement to search for this user
        $this->select($this->_table , "User_Name = '" . $username . "' AND Password = ".$password);

        return $this->fetch(); //func return one row || false if no user 
    }
   
}

?>