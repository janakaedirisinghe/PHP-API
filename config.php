<?php
    class Connect extends PDO
    {
       public function __construct()
       {
        parent::__construct("mysqli:host=localhost;dbname=api",'root','',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $THIS->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
       }
    }

?>
