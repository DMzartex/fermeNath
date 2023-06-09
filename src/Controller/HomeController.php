<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController {

    #[Route("/",name: "home")]
    public function index():Response
    {
        return $this->render('Pages/home.html.twig');
    }
}