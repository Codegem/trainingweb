<?php

class DBController
{
    // Db Connection
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = 'root';
    protected $database = 'shopee';

    public $con = null;

    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->con->connect_error){
            echo "Fail" . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // closing connect
    protected function closeConnection(){
        if($this->con!=null){
            $this->con->close();
            $this->con = null;
        }
    }
}
