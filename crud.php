<?php
require_once"koneksi.php";
class crud extends config{
    private $db='test';
    function __construct(){
        $this->konek();
        $this->pilih_db($this->db);
    }
    function read($table){
        $kueri=mysql_query("SELECT * FROM ".$table);
        return $kueri;
    }
    function add(){
        
    }
    function edit(){
        
    }
    function delete(){
        
    }
}

?>