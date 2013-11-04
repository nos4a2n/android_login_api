<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Naveed
 * Date: 10/2/13
 * Time: 3:04 PM
 * To change this template use File | Settings | File Templates.
 */

class DB_Connect {

    // constructor
    function __construct() {

    }

    // destructor
    function __destruct() {
        // $this->close();
    }

    // Connecting to database
    public function connect() {
        require_once 'config.php';
        // connecting to mysql
        $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        // selecting database
        mysql_select_db(DB_DATABASE);

        // return database handler
        return $con;
    }

    // Closing database connection
    public function close() {
        mysql_close();
    }

}

?>