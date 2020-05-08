<?php
class Admin extends person 
{
    /**
    *   Constructor
    *   just call parent Constructor
    */
    public function __construct() 
    {
        parent::__construct();
        
    }

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
       
        $mail->setFrom('a01122882174@gmail.com', 'Hossam');
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
}