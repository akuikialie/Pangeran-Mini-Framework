<?php

namespace Pangeran\HomePageBundle\Model;

class Mahasiswa
{
    public $db;
    
    public function __construct($db)
    {
        $this->db = $db;
    }
    
    public function getMahasiswa()
    {
        $query = $this->db->prepare("select * from mahasiswa");
        $query->execute();
        return $query->fetchAll();
    }
}
