<?php
    require_once 'Person.php';
class User extends person
{
    //Attributes
    public $product ;
    public $order;
    
    public function __construct() 
    {
        //taking object from clsss Products to use its function 
        $this->product = new products();
        $this->order = new orders();

    	parent::__construct();
    }

    /**
     * Update existing user
     * @param $user_data Associative array containing column and value
     * @param int $user_Id
     * @return  bool true if updated 
     */
    public function updateUser($user_data , $user_Id)
    {
        return $this->update($this->_table , $user_data , 'Id = ' . $user_Id);

    }

    /**
     * Search for Products for user in menu page
     * @param string $keyword
     * @return  int Number of affected rows
     * @return array Returns every user row as array of associative array
     */
    public function searchPro($keyword)
    {
        return $this->product->searchProducts($keyword);
    }

    //Orders Section

     /**
     *Place New Order
     * @param array $user_data Associative array containing column and value
     * @return bool Returns true if added successfully
     */
    public function placeOrder($data)
    {
        return $this->order->placeOrder($data);
    }

    /**
     *Add order details
     * @param array $data Associative array containing column and value
     * @return bool Returns true if added successfully
     */
    public function setOrderData($data)
    {
        return $this->order->setOrderData($data);
    } 

    /*
    *  Show all orders that not delivered yet for spicified user
    *  @return array 
    */

    public function getWatingOrdersForUser($user_Id)
    {
        return $this->order->getWatingOrdersForUser($user_Id);
    }

    /*
    *  Show all orders for specified user
    *  @param int $usr_Id 
    *  @return array 
    */

    public function getOrders($usr_Id)
    {
        return $this->order->getOrders($usr_Id);
    }
}

?>