<?php
    require_once 'config.php';
    require_once 'Db_Control.php';
    require_once 'Products.php';

    class orders extends Db_Control{

        //set the table name
    protected $_table = 'orders';	// This is the name of the table on DB

    public function __construct() 
    {
        // Add from config.php file
        global $config;

        // Call the parent constructor
    	parent::__construct($config);
    }

    /*
    *  List All Orders for UserHome.php
    *  @return array Returns every orders that has statue (delivered , Canceled) only
    */  
    public function getFinishedOrders()
    {
        $this->select($this->_table,' Order_Statue <> \'Waiting\' ','*','Order_Date' , ' DESC ');
        return $this->fetchAll();
    }

    /*
    *  Show all orders for specified user
    *  @param int $usr_Id 
    *  @return array 
    */

    public function getOrders($usr_Id)
    {
        $this->select($this->_table , ' Cust_Id = '.$usr_Id , '*' , 'Order_Date' , ' DESC ');
        return $this->fetchAll(); 
    }

    /*
    *  Show all orders that not delivered yet
    *  @return array 
    */

    public function getWatingOrders()
    {
        $this->select($this->_table , ' Order_Statue = \'Waiting\'' , '*' , 'Order_Date' , ' ASC ');
        return $this->fetchAll(); 
    }

    /*
    *  Show all orders that not delivered yet for spicified user
    *  @return array 
    */

    public function getWatingOrdersForUser($user_Id)
    {
        $this->select($this->_table , ' Cust_Id = ' . $user_Id . ' AND Order_Statue = \'Waiting\'' , '*' , 'Order_Date' , ' ASC ');
        return $this->fetchAll(); 
    }

    /**
     *Place New Order
     * @param array $user_data Associative array containing column and value
     * @return bool Returns true if added successfully
     */
    public function placeOrder($data)
    {
        return $this->insert($this->_table,$data);
    }

    /**
     *Add order details
     * @param array $data Associative array containing column and value
     * @return bool Returns true if added successfully
     */
    public function setOrderData($data)
    {
        return $this->insert('orders_details',$data);
    }   

    /**
     *change Order Statue
     * @param array $data Associative array containing column and value
     * @return bool Returns true if added successfully
     */
    public function changeStatue($order_Id , $Stat)
    {
        //prepare to update statement
        $data = array("Order_Statue"  => $Stat);

        return $this->update($this->_table , $data , ' Order_Id = '.$order_Id);
    } 
}