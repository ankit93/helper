<?php
class db
{	
    // mysqli_connect("example.com", "user", "password", "database");
   // public function __construct($user ='root', $pass ='vnt', $name = 'victorynet', $server = 'localhost')
    public function __construct($user ='b923e5879b2598', $pass ='c48c0cf4', $name = 'heroku_5035f62fbd8a42c', $server = 'us-cdbr-east-06.cleardb.net')
   {
       $this->db_user = $user;
        $this->db_pass = $pass;
        $this->db_name = $name;
        $this->db_server = $server;
        $this->connect();

    }
    function connect()
    {
        $this->link = @mysqli_connect($this->db_server, $this->db_user, $this->db_pass,$this->db_name ) or
            die("can't connect to database");
       
    }


    function disconnect()
    {
        @mysqli_close($this->link);
    }

    function getArray($info)
    {
        return mysqli_fetch_array(mysqli_query($this->link,$info));
    }

    function assoc($info)
    {
        return mysqli_fetch_assoc($info);
    }

    function query($info)
    {
        return mysqli_query($this->link,$info);
    }

    function fetch($info)
    {
        return mysqli_fetch_array($info);
    }

    function num($info)
    {
        return mysqli_num_rows($info);
    }

    function lastInsert()
    {
        return mysqli_insert_id();
    }

    function affected()
    {
        return mysqli_affected_rows();
    }
}

?>