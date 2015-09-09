<?php

namespace Pangeran\HomePageBundle\Controller;

use \Slim\Slim;
use Pangeran\HomePageBundle\Model\Mahasiswa;

class HomeController
{
    public $plates;
    public $Mahasiswa;
    
    public function __construct($app)
    {
        $this->Mahasiswa = new Mahasiswa($app->container->get('Pdo'));
        $this->plates = $app->container->get('Plates');
    }
    
    public function homeAction()
    {
        $data_mahasiswa = $this->Mahasiswa->getMahasiswa();
        echo $this->plates->render('HomePageBundle/View/Home', array('data_mahasiswa' => $data_mahasiswa));
    }
}
