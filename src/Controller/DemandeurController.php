<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; //add this line to add usage of Route class
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Ticket;
use App\Form\TicketType;


/**
 * @Route("/demandeur")
 */ 

class DemandeurController extends Controller
{

    /**
     * @Route("/home", name="app_home_demandeur") //add this comment to annotations
     */
    public function homeAction()
    {

        return $this->render("Demandeur/homeDemandeur.html.twig");
        
    }


    /**
     * @Route("/creerTicket", name="app_creerTicket_demandeur") //add this comment to annotations
     */
    public function creerTicket(Request $request)
    {
            $ticket = new Ticket();
        $form = $this->createForm(TicketType::class, $ticket);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            throw new \Exception("your job stats is.");


            return $this->redirectToRoute('redirect_to_another_rule');
        }

        return $this->render(
            'Demandeur/demandeurCreerTicket.html.twig',
            array('form' => $form->createView())
        );        
    }

    /**
     * @Route("/consulterTicket", name="app_consulterTicket") //add this comment to annotations
     */
    public function consulterTicket()
    {

    }

}
