<?php 
class   Database{
    public $driver;
    public $link;


    public function setDrive($driver){
        $this->driver = $driver;

    }

    public function connect(){
        if($this->driver == "mysql"){
            $mngmysql = new ManageMysql();
            $mngmysql->setHost($host);
            $mngmysql->setDB($db);
            $mngmysql->setUser($user);
            $mngmysql->setpass($pass);
            $this->link = $mngmysql->connect();

        }
        elseif($this->driver == "sqlite"){

            $mngmysqlite = new ManageMysqlite();
            $mngmysqlite->setHost($host);
            $mngmysqlite->setDB($db);
            $mngmysqlite->setUser($user);
            $mngmysqlite->setpass($pass);
           $this->link = $mngmysqlite->connect();
        }
    }
} 
?>