<?php

class con_sql {

    #
    # privates Propreties
    #
    private $dbhost, $dbuser, $dbpass;

    #
    # methods
    # Here Used Constructer For Methods and Propreties
    # Doing That to start connection with MySQL
    #
    public function __construct ($host,$user,$pass) {
    $this->dbhost = $host;
    $this->dbuser = $user;
    $this->dbpass = $pass;
    }

    #
    # Here you have a con func to used selected Propreties
    # To do connect with the Funcion mysql_connect();
    #
    public function con () {
        @mysql_connect($this->dbhost,$this->dbuser,$this->dbpass) or die("Not Connect");
    }

    #
    # Here you have a select db via used mysql_selectd_db
    #
    public function selectdb ($data) {
        @mysql_select_db($data) or die ("Not Selected Data Base");
    }
}


########################
#Server Name
$DB_HOST = "localhost";
#DB Name
$DB_NAME = "usser";
#User Name
$DB_USER = "root";
#User Pass
$DB_PASS = "root";
########################

$con = new con_sql($DB_HOST,$DB_USER,$DB_PASS);
$con->con();
$con->selectdb($DB_NAME);
?>
