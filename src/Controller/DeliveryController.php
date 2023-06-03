<?php

namespace App\Controller;


use App\Entity\Delivery;
use App\Repository\DeliveryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeliveryController extends AbstractController {
    #[Route('/livraison','delivery.index')]
    function index(DeliveryRepository $deliveryRepository):Response{
        $delivery = $deliveryRepository->findAll();

        return $this->render('delivery/index.html.twig',[
            'delivery' => $delivery
        ]);
    }

    /**
     * @Route ("/livraison/{slug}-{id}",name="delivery.show",requirements={"slug": "[a-z0-9\-]*"})
     */
    public function show(string $slug,$id,DeliveryRepository $deliveryRepository,Delivery $delivery):Response{
        if($delivery->getSlug() !== $slug){
            return $this->redirectToRoute('delivery.show',[
                'id' => $delivery->getId(),
                'slug' => $delivery->getSlug()
            ],301);
        }
        $delivery = $deliveryRepository->find($id);
        return $this->render('delivery/show.html.twig',[
            'delivery' => $delivery
        ]);
    }
}