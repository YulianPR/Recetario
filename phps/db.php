<?php 
    namespace Medoo;
    require 'Medoo.php';
    
    if(!isset($database)){
        $database = new Medoo([
            // [required]
            'type' => 'mysql',
            'host' => 'db4free.net:3306',
            'database' => 'tb_recipess',
            'username' => 'yulianpacheco',
            'password' => 'rootroot'
        ]);
    }
?>