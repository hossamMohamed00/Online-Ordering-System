<?php

    require_once 'Products.php';
    require_once 'config.php';
    require_once 'Db_Control.php';

    class orders extends Db_Control{

    //set the table name
    protected string $_table = 'orders';	// This is the name of the table on DB

    //Attributes
    private $Order_Id ;
    private $Order_Desc;
    private $Order_Date;
    private $Order_Statue;
    private $Total_Cost;
    private $Payment_Method;
    private $Cust_Id;
        

    public function __construct()
    {

        // Add from config.php file
        global $config;

        // Call the Db_Control constructor
        parent::__construct($config);
    }

    //Setters $$ Getters
    public function setId($id)
    {
        $this->Order_Id = $id;
    }
    public function getId()
    {
        return $this->Order_Id;
    }

    public function setOrderDesc($Desc)
    {
        $this->Order_Desc = $Desc;
    }
    public function getOrderDesc()
    {
        return $this->Order_Desc;
    }
    
    public function setOrderDate($Order_Date)
    {
        $this->Order_Date = $Order_Date;
    }
    public function getOrderDate()
    {
        return $this->Order_Date;
    }

    public function setOrderStat($Order_Statue)
    {
        $this->Order_Statue = $Order_Statue;
    }
    public function getOrderStat()
    {
        return $this->Order_Statue;
    }

    public function setTotalCost($Total_Cost)
    {
        $this->Total_Cost = $Total_Cost;
    }
    public function getTotalCost()
    {
        return $this->Total_Cost;
    }

    public function setPayment_Method($Payment_Method)
    {
        $this->Payment_Method = $Payment_Method;
    }
    public function getPayment_Method()
    {
        return $this->Payment_Method;
    }

    public function setCust_Id($Cust_Id)
    {
        $this->Cust_Id = $Cust_Id;
    }
    public function getCust_Id()
    {
        return $this->Cust_Id;
    }

    //Operations
    /*
    *  List All Orders for Admin_Home.php
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
    *  Show all orders that not delivered yet for Admin page 
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

    /**
     * Filter Orders for Admin Page
     * @param date $from_date && $to_date
     * @return array all orders that matched this Date and that not has statue waiting
     */
    public function Filter_Orders($from_date , $to_date)
    {
        $query ="SELECT * FROM orders WHERE  Order_Statue <> 'Waiting' AND  Order_Date BETWEEN '" . $from_date ."' AND '" .$to_date ."'  ORDER BY Order_Date ASC";
        $this->query($query);
        return $this->fetchAll();
    }
}