<?php

    define("HOME", __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR);

    const CFG = array(
        "db" => array(
        "host" => HOME."data".DIRECTORY_SEPARATOR,
        "port" => null,
        "database" => "madb.db",
        "login" => "E217657J",
        "password" => "Tit042003?",
        "options" => array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION),
        "exec" => "PRAGMA foreign_keys = ON;"
            ),
        "siteURL" => "https://srv-infoweb.iut-nantes.univ-nantes.prive/~E217657J/td2/app/" 
    );

?>