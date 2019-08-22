<?php

class DB
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function connect()
    {
         $this->servername ="localhost";
        $this->username ="root";
        $this->password ="Admin2019";
        $this->dbname ="fichepaie";
        /*$this->servername ="localhost";
     $this->username ="administap4glam";
     $this->password ="fxwS88MYCHRjMLa6";
     $this->dbname ="tap4glam";*/

        $con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        $con->set_charset("utf8");
        return $con;

    }
}


?>
