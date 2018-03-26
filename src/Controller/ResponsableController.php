<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; //add this line to add usage of Route class
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/operateur")
 */ 

class ResponsableController extends Controller
{

    /**
     * @Route("/home", name="app_home_responsable") //add this comment to annotations
     */
    public function homeAction()
    {

        return $this->render("Responsable/homeResponsable.html.twig");
        
    }


    /**
     * @Route("/tickets", name="app_consulterStatistiques_responsable") //add this comment to annotations
     */
    public function consulterStatistiques(Request $request)
    {
        return $this->render('Responsable/responsableStatistiques.html.twig');
    }


}
