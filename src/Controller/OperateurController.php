<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; //add this line to add usage of Route class
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/operateur")
 */ 

class OperateurController extends Controller
{

    /**
     * @Route("/home", name="app_home_operateur") //add this comment to annotations
     */
    public function homeAction()
    {

        return $this->render("Operateur/homeOperateur.html.twig");
        
    }


    /**
     * @Route("/tickets", name="app_consulterTicket_operateur") //add this comment to annotations
     */
    public function consulterTickets(Request $request)
    {
        return $this->render('Operateur/operateurTickets.html.twig');       
    }


}
