<?php
    require_once 'config.php';
    require_once 'Db_Control.php';

class products extends Db_Control
{
    //set the table name
    public $_table = 'products';
    
    //Attributes
    private $Pro_Id;
    private $Pro_Name;
    private $Pro_Desc;
    private $Pro_Price;
    private $Pro_Img;
    private $Pro_Statue;
    private $Special;


    public function __construct() 
    {
        // Add from config.php file
        global $config;

        // Call the parent constructor
    	parent::__construct($config);
    }

    //Setter && Getters
    public function setId($id)
    {
        $this->Pro_Id = $id;
    }
    public function getId()
    {
        return $this->Pro_Id;
    }

    public function setName($name)
    {
        $this->Pro_Name = $name;
    }
    public function getName()
    {
        return $this->Pro_Name;
    }

    public function setProDesc($Desc)
    {
        $this->Pro_Desc = $Desc;
    }
    public function getProDesc()
    {
        return $this->Pro_Desc;
    }
    
    public function setProPrice($price)
    {
        $this->Pro_Price = $price;
    }
    public function getProPrice()
    {
        return $this->Pro_Price;
    }

    public function setProImg($Img)
    {
        $this->Pro_Img = $Img;
    }
    public function getProImg()
    {
        return $this->Pro_Img;
    }

    public function setProStatue($Pro_Statue)
    {
        $this->Pro_Statue = $Pro_Statue;
    }
    public function getProStatue()
    {
        return $this->Pro_Statue;
    }

    public function setSpecial($Special)
    {
        $this->Special = $Special;
    }
    public function isSpecial()
    {
        return $this->Special;
    }

    /*
    *  List All products
    *  @return array Returns every products row as array of associative array
    */
    public function getProducts()
    {
        $this->select($this->_table,'','*','Pro_Price');
        return $this->fetchAll();
    }

    /*
    *  Show one product
    *  @param int $pro_Id 
    *  @return array Returns a row as  associative array
    */

    public function getProduct($pro_Id)
    {
        $this->select($this->_table , ' Pro_Id = '.$pro_Id);
        return $this->fetch(); //func return one row 
    }

    /**
     * Add New Product
     * @param array $product_data Associative array containing column and value
     * @return bool Returns true if added successfully
     */
    public function addProduct($product_data)
    {
        return $this->insert($this->_table,$product_data);
    }

     /**
     * Delete existing product
     * @param int $pro_Id
     * @return  int Number of affected rows
     */
    public function deleteProduct($pro_Id)
    {
        return $this->delete($this->_table  , 'Pro_Id = '.$pro_Id);
    }

    /**
     * Update existing product
     * @param $pro_data Associative array containing column and value
     * @param int $pro_Id
     * @return  int Number of affected rows
     */
    public function updatePro($pro_data , $pro_Id)
    {
        return $this->update($this->_table , $pro_data , 'Pro_Id = ' . $pro_Id);

    }

    /**
     * Search for Products
     * @param string $keyword
     * @return  int Number of affected rows
     * @return array Returns every user row as array of associative array
     */
    public function searchProducts($keyword)
    {
        $query ='';
        
        if($keyword == 'Avaliable' || $keyword == 'avaliable')
        {
            $query  = "  Pro_Statue = 1 " ;
        }
        else if ($keyword == 'not Avaliable' || $keyword == 'Not Avaliable' || $keyword == 'Not avaliable' || $keyword == 'not avaliable')
        {
            $query  = " Pro_Statue = 0 ";
        }  
        else if(is_numeric($keyword))
        {
            $query = " Pro_Id = ".$keyword;
            
        }
         else if($keyword == 'all' || $keyword == 'All')
        {
            $query = '';
        }
        else
        {
            $query = " Pro_Name LIKE '%$keyword%' ";
        }

        $this->select($this->_table  , $query,'*','Pro_Price');
        return $this->fetchAll();
    }
}