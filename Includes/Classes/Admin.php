<?php
class Admin extends person 
{
    //Attributes
    public $product ;
    public $order;
    /**
    *   Constructor
    *   just call parent Constructor
    */
    public function __construct() 
    {
        //taking object from clsss Products to use its function 
        $this->product = new products();
        $this->order = new orders();

        parent::__construct();

    }

    //Product Section

    /**
     * Add New Product
     * @param array $pro_data  Associative array containing column and value
     * @return bool Returns true if added successfully
     */
    public function addPro($Pro_data)
    {
        //call Add Product Func from class products 
       return $this->product->addProduct($Pro_data);//return true or false
    }

    /*
    *  Show one product
    *  @param int $pro_Id 
    *  @return array Returns a row as  associative array
    */

    public function getProData($pro_Id)
    {
        return $this->product->getProduct($pro_Id);
    }

    /*
    *  List All products
    *  @return array Returns every products row as array of associative array
    */
    public function getAllProducts()
    {
        return $this->product->getProducts();
    }

    /**
     * Delete existing product
     * @param int $pro_Id
     * @return  int Number of affected rows
     */
    public function deletePro($pro_Id)
    {
        return $this->product->deleteProduct($pro_Id);
    }

    /**
     * Update existing product
     * @param $pro_data Associative array containing column and value
     * @param int $pro_Id
     * @return  int Number of affected rows
     */
    public function updateProduct($pro_data , $pro_Id)
    {
        return $this->product->updatePro($pro_data,$pro_Id);
    }
    /**
     * Search for Products for admin page 
     * @param string $keyword
     * @return  int Number of affected rows
     * @return array Returns every user row as array of associative array
     */
    public function searchPro($keyword)
    {
        return $this->product->searchProducts($keyword);
    }
   

    //User Section
    
    /*
    *  List All Users
    *  @return array Returns every user row as array of associative array
    */
    public function getUsers()
    {
        //call func select and pass tableName and * to return all details and Order By User_Type_Id
        $this->select($this->_table,'','*','User_Type_Id');

        return $this->fetchAll(); //retrun all data || false if no data 
    }

    /**
     * Add New User
     * @param array $user_data Associative array containing column and value
     * @return bool Returns true if added successfully
     */
    public function addUser($user_data)
    {
        return $this->insert($this->_table,$user_data);
    }

    /**
    * search if username exist to validate when user want to register
    * @param string $username that will search for in DB
    * @return bool false if at least one have this username || true if not 
    */
    public function checkUserName($username)
    {   
       $countRow =  $this-> searchusername($this->_table , ' User_Name = "'.$username.'"');

       if($countRow == 1)
        {
            return false;
        }
        return true;    
    }
    
    /**
     * Delete existing user
     * @param int $user_Id
     * @return  int Number of affected rows
     */
    public function deleteUser($user_Id)
    {
        return $this->delete($this->_table  , 'Id = '.$user_Id);
    }

    /**
     * Search existing user
     * @param string $keyword
     * @return  int Number of affected rows
     * @return array Returns every user row as array of associative array
     */
    public function searchUsers($keyword)
    {
        $query ='';
        
        if($keyword == 'User' || $keyword == 'user')
        {
            $query  = "  User_Type_Id = 2 " ;
        }
        else if ($keyword == 'Admin' || $keyword == 'admin')
        {
            $query  = " User_Type_Id = 1 ";
        }  
        else if(is_numeric($keyword))
        {
            $query = " Id = ".$keyword;
            
        }
         else if($keyword == 'all' || $keyword == 'All')
        {
            $query = '';
        }
        else
        {
            $query = " Name LIKE '%$keyword%' ";
        }

        $this->select($this->_table  , $query,'*','User_Type_Id');
        return $this->fetchAll();
    }

    //Send Mail
    
    /**
     * Sending Email To the User after placing Order
     * @param txt $user_email
     * @param txt $subject
     * @param txt $msg
     * @return  bool true if sent
     */
    public function SendMail($user_email , $subject , $msg)
    {
        require_once 'PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer();
       
        $mail->setFrom('Online.Burger.food@gmail.com', 'Online Burger');
        $mail->addAddress('Online Order Food');
        $mail->isHTML();

        //set the sender info
        $mail->Username = 'Online.Burger.food@gmail.com';
        $mail->Password = 'online.burger';
        
        //set the data to be send
        $mail->Subject =$subject;
        $mail->Body = $msg;
        $mail->AddAddress($user_email);

        return $mail->send();
    }

    //Orders Section

    /*
    *  List All Orders for Admin_Home.php
    *  @return array Returns every orders that has statue (delivered , Canceled) only
    */  
    public function getAllOrders()
    {
        return $this->order->getFinishedOrders();
    }

    /*
    *  Show all orders that not delivered yet for Admin page 
    *  @return array 
    */

    public function getWatingOrders()
    {
        return $this->order->getWatingOrders();
    }

    /**
     *change Order Statue
     * @param array $data Associative array containing column and value
     * @return bool Returns true if added successfully
     */
    public function changeStatue($order_Id , $Stat)
    {
        return $this->order->changeStatue($order_Id , $Stat);
    }

    /**
     * Filter Orders for Admin Page
     * @param date $from_date && $to_date
     * @return array all orders that matched this Date and that not has statue waiting
     */
    public function Filter_Orders($from_date , $to_date)
    {
        return $this->order->Filter_Orders($from_date , $to_date);
    }
}