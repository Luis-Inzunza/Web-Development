<?php
class QueryManager {
    private static $connection;

    private const HOST = "localhost";

    private const USER = "sube_baja";

    private const PASSWORD = "";

    private const SCHEMA = "amigables";

    public function __construct()
    {

    }

    private function connect() {
        if(!isset(self::$connection) || self::$connection === null){
            self::$connection = mysqli_connect(
                self::HOST, self::USER, self::PASSWORD, self::SCHEMA
            );
        }
        if (mysqli_connect_error()) {
            throw new Exception("data_base_error_exception");
        }
    }

    public function execute_query($query) {
        $this->connect();
        $result_query = mysqli_query(self::$connection, $query);
        echo $result_query;
        $this->close_connection();
        if($result_query == false){
            throw new Exception("query_exception");
        }else {
            return $result_query;
        }
    }

    private function close_connection() {
        if (isset(self::$connection)) {
            mysqli_close(self::$connection);
            self::$connection = null;
        }
    }
}


?>