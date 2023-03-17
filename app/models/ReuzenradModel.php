<?php

class ReuzenradModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTopReuzenrad()
    {
        $this->db->query("SELECT * FROM Reuzenrad ORDER BY Id ASC LIMIT 5");
        return $this->db->resultSet();
    }
}