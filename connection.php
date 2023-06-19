<?php

class database
{
    public $db;
    public function __construct()
    {
        try {
            $this->db= new PDO ("mysql:host=localhost;dbname=product",
                "admin",
                "welcome");
        }
        catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}