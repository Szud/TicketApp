<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; //add this line to add usage of Route class.

class MainController extends Controller
{

    /**
     * @Route("/", name="app_home") //add this comment to annotations
     */
    public function homeAction()
    {

        return $this->render("main/home.html.twig", ["project_name" => "yourProject"]);
        
    }

}