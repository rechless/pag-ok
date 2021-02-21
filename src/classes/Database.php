<?php
class Database
{
    public function __construct()
    {
        $this->jsonFile = "src/database/duvidas.json";
        
        if(!file_exists($this->jsonFile)) {
            die("Arquivo json não encontrado");
        } else {
            $this->content = file_get_contents($this->jsonFile);
        }
    }

    public function getJson()
    {
       return $this->content;
    }
}

$database = new Database;
?>