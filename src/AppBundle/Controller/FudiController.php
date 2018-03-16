<?php
// src/AppBundle/Controller/FudiController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FudiController extends Controller
{
    /**
    *@Route("/", name="home")

    **/
    
    public function showIndex()
    {
        
        return $this->render('Fudi/index.html.twig');
                                
    }

}