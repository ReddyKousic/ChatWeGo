
<?php
// Create connection
class Database
{
    private $host = "db4free.net";
    private $username = "kousicreddy2211";
    private $password = "kousicreddy2211A!";
    private $db = "kousicreddy";

    function connect(){
      $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
      return $connection;
    }

    function read($query){
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);
        if (!$result) {
            return false;
        }else{
            $data = false;
           while ($row = mysqli_fetch_assoc($result)) {
              $data[]=$row;
           }
           return $data;
        }
    }
    function save($query){
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);
        if (!$result) {
            return false;
        }else{
            return true;
        }
    }
}