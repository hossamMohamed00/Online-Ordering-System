<?php
	
    require 'config.php';
    require 'Db_Control.php';
    require 'Products.php';
    require 'Orders.php';

class person 
{  
    //Attributes to hold the instance of the classes
    protected $product ;
    protected $order;

    //get instance of db control(singltone class)
    protected $DB;

    //set the table name
    protected $_table = 'users';    // This is the name of the table on DB

    //Attributes
    private $Id;
    public  $Name;
    private $username;
    private $password;
    public $phone;
    public $address;
    public $Email;
    public $usertype;

    /**
    * Constructor
	* Add array config to pass it to the constructor of the DB_Control class to initialize data for connection
    */
    public function __construct() 
    {
        //taking instances from clsss Products and order
        $this->product = new products();
        $this->order = new orders();

        // get from config.php file
        global $config; //the configuration of the DB 

        //get instance of DB_control (singltone class)
        $this->DB = Db_Control::getInstance($config);
    }
    //Setter && Getters
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
        $this->DB->select($this->_table , 'Id = '.$user_Id);

        return  $this->DB->fetch(); //func return one row 
    }

    /**
     * get User Data For Login
     * @param $username,$password to search in DB with it 
     * @return  array userData
     */
    public function getUserForLogin($username , $password)
    {
    	//call function select and pass tableName and the where statement to search for this user
        $this->DB->select($this->_table , "User_Name = '" . $username . "' AND Password = ".$password);

        return  $this->DB->fetch(); //func return one row || false if no user 
    }
    
}

?>