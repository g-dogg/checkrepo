<?php
/**
 * Класс подключения к БД MySQL
 *
 * @author g_dogg
 */
class mysql_class 
    {
    public $dbsrv = "localhost"; 
    public $dbuser = "root"; 
    public $dbpass = "1234"; 
    public $dbname = "appearance";
    public $connect_id;   //идентификатор соединения
    public $sql_query;    //строка запроса. в нее помещается запрос к БД
    public $sql_result;    //содержит результат запроса к БД
    public $sql_error;     //содержит ошибку подключения к БД

    function __construct() {
        $this->connect_id = $connect_id;
        $this->sql_query = $sql_query;
        $this->sql_result = $sql_result;
        $this->sql_error = $sql_error;
    }
    public function sql_connect() {
        $this->connect_id = mysql_connect($this->dbsrv, $this->dbuser, $this->dbpass);
        mysql_select_db($this->dbname);
        mysql_query("SET NAMES cp1251");
        }
        
    public function sql_close() {
        mysql_close($this->connect_id);
        }

    public function sql_execute() { //запрос к БД
        $this->sql_result = mysql_query($this->sql_query,  $this->connect_id);
        $this->sql_error = mysql_error();
        }
    }
//экземпляр класса
$siquel = new mysql_class;
?>