<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
 //add this line to add usage of Route class.
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
		/**
     	* @Route("/product") //add this comment to annotations
     	*/

class ProductController extends Controller
{

	
		/**
     	* @Route("/add") //add this comment to annotations
     	*/

	
	 public function add(Request $request){
		$form = $this->createFormBuilder()
    			->add("name", TextType::class)
    			->add("releaseOn", DateType::class, [
        		"widget" => "single_text"
    			])
    			->add("save", SubmitType::class, ["label" => "create Product"])
    			->getForm();
    			
				$result = [];
				$form->handleRequest($request);
				if ($form->isSubmitted() && $form->isValid()) {
				    $result = $form->getData();
				}
				return $this->render("product/add.html.twig", array("form" => $form->createView()) , "result" => $result;

        );
	}
}
