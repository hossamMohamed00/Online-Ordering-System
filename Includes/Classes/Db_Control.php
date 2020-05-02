<?php 
class Db_Control
{

    protected $_config = array();
    protected $link; //store connection
    protected $_result; //store result from select statement

    /*
    *Constructor
    */
    public function __construct(array $config)
    {
        if(count($config) != 4)
        {
            throw new InvalidArgumentException('Invalid number of connection parameters');
        }
        $this->_config = $config;
    }
    /*
    * connect to Mysql
    */
     public function connect()
    {
        //connect only once 
        if($this->link === null)
        {
            list($host,$username,$password,$database) = $this->_config;

            if(!$this->link = @mysqli_connect($host,$username,$password,$database))
            {
                throw new RuntimeException('Error connecting to the server : '.mysqli_connect_error());
            }
            unset ($host,$username,$password,$database);
        }
        return $this->link;
    }
    /*
    *   Execute  the spicified query
    */
    public function query($query)
    {
        if(!is_string($query) || empty($query))
        {
            throw new InvalidArgumentException('The spicified query is not valid');
        }
        //lazy connect to Mysql
        $this->connect();
        if(!$this->_result = mysqli_query($this->link,$query))
        {
            throw new RuntimeException('Error executing the spicified query'.$query.'Error is :: '.mysqli_connect_error());
        } 
        return $this->_result;
    }


    /*
    *   perform SELECT statement to return count of data in table only , if you want data use function fetch 
    */
    public function select($table, $where = '', $fields = '*', $order = '' , $type = ' ASC ')
    {
        $query  =  'SELECT ' . $fields . ' FROM ' . $table
                    . (($where) ? ' WHERE ' . $where : '')
                    . (($order) ? ' ORDER BY ' . $order .$type  : '');

       $this->query($query);
       return $this->countRows();
    }

    /**
    * search if username exist
    * @param table name && where condition to search
    * @return int count rows that exist 
    */
    public function searchusername($table,$where = '')
    {
        $query  =  'SELECT User_Name FROM ' . $table
                    . (($where) ? ' WHERE ' . $where : '');

       $this->query($query);
       return $this->countRows();
    }
    
    /*
    *   perform INSERT statement
    */
    public function insert($table, array $data)
    {
        
        $fields = implode(',' , array_keys($data));
        //Escape Values before store it 
        $values = implode(',', array_map(array($this , 'quoteValue') , array_values($data))); // to avoid sql injection 
        $query = 'INSERT INTO ' . $table .' (' .  $fields . ') ' . ' VALUES (' .$values. ')';
        $this->query($query);
        return $this->getInsertId();
    }
    /*
    *   Perform UPDATE statement
    */
    public function update($table , array $data , $where = '')
    {
        foreach ( $data as $field => $value)
        {
            $set[]  =  $field . '=' . $this->quoteValue($value);
        }
        $set  = implode(',' , $set);

        $query = 'UPDATE ' . $table . ' SET ' . $set . (($where) ? ' WHERE ' . $where : '');

        $this->query($query);

        return true;
    }

    /*
    *   Perform DELETE statement
    */
    public function delete($table , $where = '')
    {
        $query = 'DELETE FROM ' . $table . (($where) ? ' WHERE ' . $where : ''); ;

        $this->query($query);

        return true;
    }

    /*
    *   Escape the specified value
    */
    public function quoteValue($value)
    {
        $this->connect();
        if($value === null)
        {
            $value = 'NULL';
        }
        else if (!is_numeric($value))
        {
            $value = "'" . mysqli_real_escape_string($this->link , $value) . "'";
        }
        return $value;
    }

    /*
    *   Fetch a single row from the current result set  (as an associative array)
    */
    public function fetch()
    {
        if ($this-> _result != null)
        {
            if(($row = mysqli_fetch_array($this->_result , MYSQLI_ASSOC)) === false)
            {
                $this->freeResult();
            }
            return $row;
        }

        return false;
    }

    /*
    *   Fetch all rows from the current result set  (as an associative array)
    */
    public function fetchAll()
    {
        if ($this-> _result != null)
        {
            if(($all = mysqli_fetch_all($this->_result , MYSQLI_ASSOC)) === false)
            {
                $this->freeResult();
            }
            return $all;
        }

        return false;
    }


    /*
    * Get the insertion ID
    */
    public function getInsertId()
    {
        return $this->link !== null ? mysqli_insert_id($this->link) : null ;
    }

    

    /*
    * Get the number of rows returned by the current result set 
    */

    public function countRows()
    {
        return $this->link !== null ? mysqli_num_rows($this->_result) : 0;
    }

    /*
    * Get the number of affected rows
    */
    public function getAffectedRows()
    {
        return $this->link !== null ? mysqli_affected_rows($this->link) : 0;
    }
    
    /*
    *  Free up the current result set
    */
    public function freeResult()
    {
        if ($this->_result === null)
        {
            return false;
        }
        mysqli_free_result($this->_result);
        return true;
    }

    /*
    *  Close explicitly the database connection  
    */
    public function disconnect()
    {
        if($this->link === null){
            return false;
         }
         mysqli_close($this->link);
         $this->link = null;
         return true;
    }

    /*
    *   Close automatically the database connection when the instance of the class is destroyed
    */

    public function __destruct()
    {
        $this->disconnect();
    }
} 

?>