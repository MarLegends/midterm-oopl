<?php 

include('connection.php');
$GLOBALS['connection'] = $connection;

class Orders{
    private $connection;
    function __construct()
    {
        $this->connection = $GLOBALS['connection'];
    }

    public function processTransaction(){
        $data = $this->connection->query('SELECT * FROM online_order')->fetchAll();
        return $data;
    }
    public function insertquery($quantity, $name, $price,$payment,$delivery,$total) {
        $insert = $this->connection->prepare("INSERT INTO online_order (quantity,`name`,`price`,`payment`,`delivery`,`total`) VALUES (?, ?, ?, ?,?,?)");
        $insert->execute([$quantity,$name, $price,$payment,$delivery,$total]);
        

        return $insert;
    }
}





?>