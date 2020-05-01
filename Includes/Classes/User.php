<?php
    require_once 'Person.php';
class User extends person
{

    public function __construct() 
    {
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

}

?>